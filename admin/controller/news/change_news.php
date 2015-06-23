<?php
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email    = $_SESSION['email'];
    $password = $_SESSION['password'];
    $check = check_admin($email, $password);
    if ($check) {
        $active = "News";
        if (isset($_GET['code']) && !isset($_POST['submit'])) {
            $news_code  = $_GET['code'];
            $news       = get_a_record('news_event_content', 'news_event_code', $news_code);
            $news_name  = get_a_record('news_event_content', 'title', $news['news_event_code']);
            $newss_name = get_all('news_event_content');
            require('view/news/change_news.php');
        } elseif (isset($_GET['code']) && isset($_POST['submit'])) {
            $news_code = $_GET['code'];
            $news      = get_a_record('news_event_content', 'news_event_code', $news_code);
            if ($_FILES['fileToUpload']['name'] != null) {
                $target_dir    = ".././asset/image/vi_news/";
                $target_file   = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk      = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                try {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                }
                catch (Exception $e) {
                    
                }
                
                if ($check !== false) {
                    $ok       = "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $error    = "File is not an image.";
                    $uploadOk = 0;
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    $error    = "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 5000000) {
                    $error    = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $error    = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $error = $error . "! Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                        $success1 = 'Thành công';
                    } else {
                        $error = "Sorry, there was an error uploading your file.";
                    }
                }
                $image = basename($_FILES['fileToUpload']['name']);
                $image = 'asset/image/vi_news/' . $image;
            } else {
                $image = $news['image'];
            }
            $title       = $_POST['title'];
            $description = $_POST['description'];
            $content     = $_POST['noidung'];
            update('news_event_content', 'news_event_code', sha1($title), 'news_event_code', $news_code);
            update('news_event_content', 'title', $title, 'news_event_code', $news_code);
            update('news_event_content', 'description', $description, 'news_event_code', $news_code);
            update('news_event_content', 'content', $content, 'news_event_code', $news_code);
            update('news_event_content', 'image', $image, 'news_event_code', $news_code);
            $news    = get_a_record('news_event_content', 'news_event_code', $news_code);
            $success = "Thay đổi thành công!";
            require('view/news/change_news.php');
        }
    } else
        header('location: index.php?controller=sign');
} else
    header('location: index.php?controller=sign');
?>