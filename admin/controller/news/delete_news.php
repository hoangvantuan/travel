<?php
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email    = $_SESSION['email'];
    $password = $_SESSION['password'];
    
    $check = check_admin($email, $password);
    if ($check) {
        $active = 'Tin tức';
        $title  = 'Danh sách tin tức';
        if (isset($_GET['code'])) {
            $current_possition = array(
                array(
                    'name' => 'Tin tức - Sự kiện',
                    'link' => 'index.php?controller=news'
                )
            );
            $code              = $_GET['code'];
            $image             = get_a_record('news_event_content', 'news_event_code', $code);
            $image             = $image['image'];
            $check             = delete('news_event_content', 'news_event_code', $code);
            if ($check) {
                $success = 'Xóa thành công';
                if ($image != "") {
                    unlink(ROOTPATH . $image);
                }
            } else
                $success = 'Xóa thành công';
            
            $code = get_all('news_event_content');
            require_once('view/news/index.php');
        } else
            header('location: index.php?controller=news');
    } else
        header('location: index.php?controller=sign');
} else
    header('location: index.php?controller=sign');
?>