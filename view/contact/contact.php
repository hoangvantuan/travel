<div class="col-md-12 contact">
   <div class="col-md-1"></div>
   <div class="col-md-6">
      <form enctype="multipart/form-data" id="form0"  action="index.php?controller=contact&amp;lang=<?php echo $lang;?>" method="post" name="contact" onsubmit="return checkinput();">
         <div class="warning-area"></div>
         <div class="left_contact">
            <div class="message"></div>
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input class="form-control" id="Hoten" name="name" placeholder="Họ tên" type="text" value="" />
            </div>
            <br />
            <div class="input-group">
               <span  class="input-group-addon"><i class="fa fa-phone"></i></span>
               <input class="form-control" id="Sdt" name="phone" placeholder="Số điện thoại. Ví dụ :0988666999" type="text" pattern ="[0-9]{10,11}" value="" />
            </div>
            <br />
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
               <input class="form-control" id="Email" name="email" placeholder="Email. Ví dụ : adtourist@gmail.com" type="email" value="" />
            </div>
            <br />
            <div class="input-group">
               <span  class="input-group-addon"><i class="fa fa-comment"></i></span>
               <input class="form-control" id="TieuDe" name="title" placeholder="Tiêu đề" type="text" value="" />
            </div>
            <br />
            <div class="text">
               <textarea class="form-control" cols="20" id="NoiDung" name="content" placeholder="Nội dung nhận xét" rows="4" style="margin: 0px; width: 100%; height: 200px;"></textarea>
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
<script type="text/javascript" charset="utf-8">
      function checkinput(){
         // check name
         if(document.contact.name.value==""){
            alert("Họ và tên không được để trống");
            document.contact.name.focus();
            return false;
         }
         // check phone
          if(document.contact.phone.value==""){
            alert("SDT không được để trống");
            document.contact.phone.focus();
            return false;
         }
         // check email;
          if(document.contact.email.value==""){
            alert("Email không được để trống");
            document.contact.email.focus();
            return false;
         }
         // check title;
          if(document.contact.title.value==""){
            alert("Tiêu để không được để trống");
            document.contact.title.focus();
            return false;
         }
         // check content
          if(document.contact.content.value==""){
            alert("Nội dung không được để trống");
            document.contact.content.focus();
            return false;
         }
      }
</script>
