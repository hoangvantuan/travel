<?php
	$active="visa"; 
	$visa_name=get_all('passport_visa');
if (isset($_POST['submit'])) {
	if($_FILES['fileToUpload']['name']!=null){
	$target_dir=".././asset/image/visa/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $ok = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error= "File is not an image.";
        $uploadOk = 0;
    }
	// Check if file already exists
	if (file_exists($target_file)) {
	    $error= "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
	    $error= "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    $error= $error. "! Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        $success1= 'Thành công';
	    } else {
	        $error= "Sorry, there was an error uploading your file.";
	    }
	}
	$image = basename($_FILES['fileToUpload']['name']);
	$image = 'asset/image/visa/'.$image;
	$passport_visa_name=$_POST['passport_visa_name'];
	$passport_visa_code=get_a_record('passport_visa','passport_visa_name',$passport_visa_name);
	$title=$_POST['title'];
	$description=$_POST['description'];
	$content=$_POST['noidung'];
	$create_at = get_time();

	$passport_visa_offers=array('passport_visa_code'=>$passport_visa_code['passport_visa_code'],'title'=>$title,'description'=>$description,'content'=>$content,'image'=>$image,'create_at'=>$create_at);
	save('passport_visa_offers',$passport_visa_offers);
	$success="Thêm thành công !";
	//var_dump($passport_visa_offers);
}else {
		$success="Chưa chọn ảnh !";
	}
	//$type = substr(strrchr($tmp, "."), 1);
	//$masp = substr($tmp, 0 ,strlen($tmp)-strlen($type)-1);
	
	




}
require('view/visa/add_visapost.php');
 ?>