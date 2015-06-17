<div class="row">
	<div class="panel panel-info">
  		<div class="panel-heading incountry">
   			<h3 class="panel-title"><?php echo $lang =='en' ? 'Domestic tourism' : 'DU LỊCH TRONG NƯỚC' ?>
   				<b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
   			</h3>
   			
  		</div>
  		<div class="panel-body incountry">
  			<div class="hidden-xs incountry-list">
    			<ul class="list-group">
    				<?php foreach ($tour_region as $key => $value) {
    					if ($value['tour_country_code'] == '1') {
    						echo '<li class="list-group-item"><a href="index.php?lang='.$lang.'&amp;controller=tour&amp;action=region&amp;tour_region_code='.$value['tour_region_code'].'">'.$value['tour_region_name'].'</a></li>';
    					}
    				} ?>
    			</ul>  				
  			</div>

  		</div>
	</div>
</div>
<div class="row">
	<div class="panel panel-info">
  		<div class="panel-heading outcountry">
   			<h3 class="panel-title"><?php echo $lang =='en' ? 'Abroad tourism' : 'DU LỊCH NƯỚC NGOÀI' ?>
   				<b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
   			</h3>
   			
  		</div>
  		<div class="panel-body outcountry">
 			<div class="hidden-xs outcountry-list">
    			<ul class="list-group">
   				<?php foreach ($tour_region as $key => $value) {
    					if ($value['tour_country_code'] == '2') {
    						echo '<li class="list-group-item"><a href="index.php?lang='.$lang.'&amp;controller=tour&amp;action=region&amp;tour_region_code='.$value['tour_region_code'].'">'.$value['tour_region_name'].'</a></li>';
    					}
    				} ?>   			
    			</ul>  				
  			</div>
  		</div>
	</div>
</div>