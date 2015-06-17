<div class="col-md-12 partner_wrap">
	<div class="partner_title row">
		<h3><?php echo $lang =='en'? 'Accompanying us': 'Đồng hành cùng chúng tôi'  ?></h3>
	</div>
	<div class="partner_slide row">
		<div class="partner_slide_wrap">
			<?php foreach ($partner as $key) {
				echo '<div class="thumbnail col-md-2 col-xs-2 col-sm-2">';
					echo '<a href='.$key['partner_link'].'>'.'<img src="'.$key['partner_image'].'" class="overimg"></a>';
				echo '</div>';
			} ?>
		</div>
	</div>
</div>
