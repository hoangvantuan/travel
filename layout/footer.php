<!-- BEGIN: Footer -->
<footer>
	<div class="container-fluid">
		<div class="row footer-top">
			<div class="col-md-4 footer-left">
				<div class="row">
					<h4 class="footer-title-lt"><?php echo $lang == 'en'?  'EMAIL REGISTER' : 'ĐĂNG KÍ EMAIL' ?></h4>
					<p><i class="glyphicon glyphicon-bookmark"></i>&nbsp; <?php if($lang == 'en') echo "Don't miss the weekly news of AD!.,"; else echo 'Đừng bỏ lỡ bản tin hàng tuần của AD., Travel Tourist !' ?></p>
					<form>
						<div class="form-group">
							<input type="email" class="form-control form-mail" placeholder="<?php echo $lang == 'en'? 'Your email' : 'Email của bạn'?>">
						</div>
						<button id="email" type="submit" class="btn btn-default btn-send-email pull-right"><i class="glyphicon glyphicon-envelope"></i>&nbsp;<?php if($lang=='en') echo 'Register'; else echo 'Đăng kí' ?></button>
					</form>
				</div>
				<div class="row">
					<h4 class="footer-title-lb"><?php echo $lang == 'en' ? 'MAP' : 'BẢN ĐỒ' ?></h4>
						<div class="widget-content">
							<iframe class="google-map" height="150" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.666451596955!2d105.842974!3d21.005997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7030dea9a0b16d02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1426309165584"  frameborder="0" style="border:0"></iframe>
						</div><!-- widget content -->
				</div>
			</div>
			<div class="col-md-4 footer-mid">
				<h4 class="footer-title-mid"><?php echo  $lang =='en'? 'CONNECT WITH US' : 'KẾT NỐI VỚI CHÚNG TÔI' ?></h4>
                     <div class="fb-like-box"
                        data-height="250" data-colorscheme="light" data-show-faces="true"
                        data-header="false" data-stream="false" data-show-border="false">
						<iframe class="facebook" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/vndesignerbybkteam&amp;width=245&amp;colorscheme=light&amp;show_faces=true&amp;connections=15&amp;stream=false&amp;header=false&amp;height=320" scrolling="no" frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; height: 320px;background:#fff;"></iframe>
                     </div>
			</div>
			<div class="col-md-4 footer-right">
				<H4 class="footer-title-right"><?php echo $lang == 'en'? 'AD TOURIST COMPANY' : 'CÔNG TY TNHH MTV THƯƠNG MẠI VÀ DU LỊCH ANH DŨNG - AD TOURIST' ?></H4>
           		<p><i class="fa fa-map-marker fa-fw"></i> Số 87 ngõ 12 Quang Trung, Văn Khê, Hà Đông, Hà Nội</p>
                <p><i class="fa fa-phone fa-fw"></i> ĐT: 0462 60 48 38</p>
                <p><i class="fa fa-mobile-phone fa-fw"></i> Hotline: 0987647504  </p>
                <p><i class="fa fa-skype fa-fw"></i>buithihanh64<i class="fa fa-yahoo fa-fw"></i>thihanh_bui</p>
                <p><i class="fa fa-envelope fa-fw"></i><a href="mailto:hanh.adtourist@gmail.com">hanh.adtourist@gmail.com</a></p>
                <p><i class="fa fa-map-marker fa-fw"></i>&nbsp;<i class="fa fa-hand-o-right"></i><a href="#">Tìm đường đến công ty chúng tôi</a></p>
			</div>
		</div>
		<div class="row footer-left">
			<div class="col-md-8">
				<p class="copyright">2015 Bản quyền thuộc về AD tourist - Được thiế kế bởi <span><a href="http://vndesigner.info/">VNDesigner</a></span></p>
			</div>
			<div class="col-md-4">
				<div class="pull-right soical">
			   <a href="https://www.facebook.com/vndesignerbybkteam"><i class="fa fa-facebook fa-2x fa"></i></a>
               <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
               <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
               <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
			</div>
			</div>
			
		</div>
	</div>
</footer>
<!--END: Footer -->
    <!-- Include JS file -->
	<script type="text/javascript" src="asset/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="asset/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/js/customer.js"></script>
	<script type="text/javascript" src="asset/js/scrolltotop.js"></script>
	<script type="text/javascript" src="asset/js/jquery.carouFredSel-6.2.1.js"></script>

</body>