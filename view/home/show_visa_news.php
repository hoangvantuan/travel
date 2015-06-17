<!-- BEGIN: Show visa enew -->
<div class="col-md-8 visas-wrap">
	<div class="row visa_title">
		<h2><i class="fa fa-cc-visa"></i><?php echo $lang =='en' ? 'Visa - Passport' : 'Visa - Hộ Chiếu' ?></h2>
	</div>
	<div class="row visa_content">
		<?php foreach ($visa as $value):?>
			<div class="col-md-4 col-sm-4 col-xs-6 visa-col">
				<div class="thumbnail visa-wrap">
					<a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=<?php echo $value['passport_visa_code']; ?>&amp;pass_offer=<?php echo $value['passport_visa_offer_code'] ?>"><img src=<?php echo $value['image'] ?> class="responsive-img overimg"></a>
					<div class="caption">
					<h3><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=<?php echo $value['passport_visa_code']; ?>&amp;pass_offer=<?php echo $value['passport_visa_offer_code'] ?>"><?php echo $value['title'] ?></a></h3>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<div class="col-md-4 news-wrap">
	<div class="row news_title">
		<h2><?php echo $lang =='en' ? 'Handbook tourist' : 'Cẩm nang du lịch' ?></h2>
	</div>
	<div class="row news_content" >
	<ul class="list-group">
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
		<li class="list-group-item"><a href="#"><i class="fa fa-book">&nbsp;</i>Đăng ký đặt mua vé máy bay Tết</a></li>
	</ul>
	</div>
</div>
<!-- END:  show visa news -->