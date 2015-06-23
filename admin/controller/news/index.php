 <?php
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email    = $_SESSION['email'];
    $password = $_SESSION['password'];
    $check    = check_admin($email, $password);
    if ($check) {
        $title             = "Tin tức - Sự kiện ";
        $active            = 'news';
        $current_possition = array(
            array(
                'name' => 'Danh sách tin tức',
                'link' => 'index.php?controller=news'
            )
        );
        $news              = get_all('news_event_content');
        require_once('view/news/index.php');
    } else
        header('location: index.php?controller=sign');
} else
    header('location: index.php?controller=sign');
?>