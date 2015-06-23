<?php
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email    = $_SESSION['email'];
    $password = $_SESSION['password'];
    $check    = check_admin($email, $password);
    if ($check) {
        $active = 'news';
        $title  = "Tin tức sự kiện";
        if (isset($_GET['news_code'])) {
            $news_code = $_GET['news_code'];
            $news      = get_a_record('news_event_content', 'content', $news_code);
            require_once('view/news/news_detail.php');
        } else
            header('location: index.php');
    } else
        header('location: index.php?controller=sign');
} else
    header('location: index.php?controller=sign');
?>