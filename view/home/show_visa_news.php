<!-- BEGIN: Show visa enew -->
<div class="col-md-8 visas-wrap">
	<div class="row visa_title">
		<h2><i class="fa fa-cc-visa"></i><?php echo $lang =='en' ? 'Visa - Passport' : 'Visa - Hộ Chiếu' ?></h2>
	</div>
	<div class="row visa_content">
		<?php $i=0;?>
		<?php foreach ($visa as $value): $i++;?>
			<div class="col-md-4 col-sm-4 col-xs-6 visa-col">
				<div class="thumbnail visa-wrap">
					<a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=<?php echo $value['passport_visa_code']; ?>&amp;pass_offer=<?php echo $value['passport_visa_offer_code'] ?>"><img src=<?php echo $value['image'] ?>  class="responsive-img  img-visa overimg"></a>
					<div class="caption">
					<h3 class="text-center"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=<?php echo $value['passport_visa_code']; ?>&amp;pass_offer=<?php echo $value['passport_visa_offer_code'] ?>"><?php echo $value['title'] ?></a></h3>
				</div>
			</div>
		</div>
		<?php if($i==6) break; endforeach ?>
	</div>
</div>
<div class="col-md-4 news-wrap">
	<div class="row news_title">
		<h2><?php echo $lang =='en' ? 'Handbook tourist' : 'Cẩm nang du lịch' ?></h2>
	</div>
	<div class="row news_content" >
	<ul class="list-group">
		<?php foreach($news_event_content as $key) :?>
		<li class="list-group-item"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=news&amp;action=detail_news&amp;news_event_content_code=<?php echo $key['news_event_content_code'] ?>"><i class="fa fa-book">&nbsp;</i><?php echo $key['title'] ?></a></li>
		<?php endforeach ?>
	</ul>
	</div>
</div>
<!-- END:  show visa news -->