<div class="col-md-12 contact">
   <div class="col-md-1"></div>
   <div class="col-md-6">
      <form enctype="multipart/form-data" id="form0" method="post">
         <div class="warning-area"></div>
         <div class="left_contact">
            <div class="message"></div>
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input class="form-control" id="Hoten" name="name" placeholder="Họ tên (*)" type="text" value="" />
            </div>
            <br />
            <div class="input-group">
               <span  class="input-group-addon"><i class="fa fa-phone"></i></span>
               <input class="form-control" id="Sdt" name="phone" placeholder="Điện thoại (*)" type="text" value="" />
            </div>
            <br />
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
               <input class="form-control" id="Email" name="email" placeholder="Email (*)" type="text" value="" />
            </div>
            <br />
            <div class="input-group">
               <span  class="input-group-addon"><i class="fa fa-comment"></i></span>
               <input class="form-control" id="TieuDe" name="title" placeholder="Tiêu đề (*)" type="text" value="" />
            </div>
            <br />
            <div class="text">
               <textarea class="form-control" cols="20" id="NoiDung" name="content" placeholder="Nội dung (*)" rows="4" style="margin: 0px; width: 100%; height: 200px;"></textarea>
            </div>
            <br />
            <p class="button">
               <input type="submit" name="submit" id="contact-submit" class="btn btn-default btn-send-email pull-right" value="Liên hệ" />
            </p>
         </div>
         <div class="clear"></div>
      </form>
   </div>
   <div class="col-md-4">
      <div class="widget-content">
         <iframe class="google-map" height="415" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.666451596955!2d105.842974!3d21.005997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7030dea9a0b16d02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1426309165584"  frameborder="0" style="border:0"></iframe>
      </div><!-- widget content -->
   </div>
</div>
<?php
ob_start();
if(isset($_POST["submit"])){
   //ten
   if($_POST["name"] == ""){
      $error="error";
   }
   else{
      $name = $_POST["name"];
   }
   // phone
   if($_POST["phone"] == ""){
      $error="error";
   }
   else{
      $phone = $_POST["phone"];
   }
   // email
   if($_POST["email"] == ""){
      $error="error";
   }
   else{
      $email = $_POST["email"];
   }
   // title
   if($_POST["title"] == ""){
      $error="error";
   }
   else{
      $title = $_POST["title"];
   }
   //content
   if($_POST["content"] == ""){
      $error="error";
   }
   else{
      $content = $_POST["content"];
   }
   //check
   if(isset($error)){
      echo "Xin mời nhập đủ thông tin";
   }
   else{
      
   }
}
?>