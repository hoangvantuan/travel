 <?php

        $title             = "Tin tức - Sự kiện ";
        $active            = 'news';
        $lang=get_lang();
        $current_possition = array(
            array(
                'name' => 'Danh sách tin tức',
                'link' => 'index.php?controller=news'
            )
        );
        $news_event = get_all('news_event');
       if(isset($_POST['news_event_code']))
    {
        $news_event_code = $_POST['news_event_code'];
        if($news_event_code == 0 )
        {
            $news = get_all('news_event_content');

        }
        else{
            $selected = $news_event_code;
            $news = get_all_record('news_event_content','news_event_code',$news_event_code);
        } 

    }
    else
    {
        $news = get_all('news_event_content');
    }
    require_once('view/news/index.php');

?>