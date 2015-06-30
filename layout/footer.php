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
							<iframe class="google-map" height="150" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d59594.055515844426!2d105.8212688185515!3d21.00752500060969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zbmfDtSAxMiBRdWFuZyBUcnVuZywgVsSDbiBLaMOqLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1435237516505"  frameborder="0" style="border:0"></iframe>
						</div><!-- widget content -->
				</div>
			</div>
			<div class="col-md-4 footer-mid">
				<h4 class="footer-title-mid"><?php echo  $lang =='en'? 'CONNECT WITH US' : 'KẾT NỐI VỚI CHÚNG TÔI' ?></h4>
                     <div class="fb-like-box"
                        data-height="250" data-colorscheme="light" data-show-faces="true"
                        data-header="false" data-stream="false" data-show-border="false">
						<iframe class="facebook" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/pages/C%C3%B4ng-Ty-Du-L%E1%BB%8Bch-Anh-D%C5%A9ng/406754662843313?ref=ts&fref=&amp;width=245&amp;colorscheme=light&amp;show_faces=true&amp;connections=15&amp;stream=false&amp;header=false&amp;height=320" scrolling="no" frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; height: 320px;background:#fff;"></iframe>
                     </div>
			</div>
			<div class="col-md-4 footer-right">
				<H4 class="footer-title-right"><?php echo $lang == 'en'? 'AD TOURIST COMPANY' : 'CÔNG TY TNHH MTV THƯƠNG MẠI VÀ DU LỊCH ANH DŨNG - AD TOURIST' ?></H4>
           		<p><i class="fa fa-map-marker fa-fw"></i> Số 87 ngõ 12 Quang Trung, Văn Khê, Hà Đông, Hà Nội</p>
                <p><i class="fa fa-phone fa-fw"></i> ĐT: 0462 60 48 38</p>
                <p><i class="fa fa-mobile-phone fa-fw"></i> Hotline: 0987647504  </p>
                <p><i class="fa fa-skype fa-fw"></i><a href="skype:adtourist?chat">adtourist</a><i class="fa fa-yahoo fa-fw"></i><a href="ymsgr:sendim?adtourist">
					<img src="http://opi.yahoo.com/online?u=adtourist&m=g&t=1" alt="Yahoo" border=0 />
				</a>Mrs Hanh</p>
				<p><i class="fa fa-skype fa-fw"></i><a href="skype:adtourist01?chat">adtourist01</a><i class="fa fa-yahoo fa-fw"></i><a href="ymsgr:sendim?adtourist01">
					<img src="http://opi.yahoo.com/online?u=adtourist01&m=g&t=1" alt="Yahoo" border=0 />
				</a>Ms Nhã Trúc 01647267747</p>
				<p><i class="fa fa-skype fa-fw"></i><a href="skype:adtourist02?chat">adtourist02</a><i class="fa fa-yahoo fa-fw"></i><a href="ymsgr:sendim?adtourist02">
					<img src="http://opi.yahoo.com/online?u=adtourist02&m=g&t=1" alt="Yahoo" border=0 />
				</a>Mr Dương 0986 151 386</p>
                <p><i class="fa fa-envelope fa-fw"></i><a href="mailto:hanh.adtourist@gmail.com">hanh.adtourist@gmail.com</a></p>
                <p><i class="fa fa-map-marker fa-fw"></i>&nbsp;<i class="fa fa-hand-o-right"></i><a target="_blank" href="https://www.google.com/maps/place/Trung+T%C3%A2m+Th%C6%B0%C6%A1ng+M%E1%BA%A1i+Hp+Landmark/@20.9724117,105.7615252,17z/data=!4m7!1m4!3m3!1s0x3134532169723285:0xdd7e377404614f54!2zVsSDbiBLaMOqLCBMYSBLaMOqLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!3b1!3m1!1s0x0000000000000000:0xf023530b9e7463a0">Tìm đường đến công ty chúng tôi</a></p>
			</div>
		</div>
		<div class="row footer-left">
			<div class="col-md-8">
				<p class="copyright">2015 Bản quyền thuộc về AD tourist - Được thiết kế bởi <span><a href="http://vndesigner.info/">VNDesigner</a></span></p>
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