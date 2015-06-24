<?php
    
        $active = 'Tin tức';
        $title  = 'Danh sách tin tức';
        $lang = get_lang();
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
            

        } 
            header('location: index.php?controller=news');

?>