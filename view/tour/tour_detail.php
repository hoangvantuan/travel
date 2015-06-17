<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>

<!--BEGIN: Content detail tour -->
<div class="container">
	<div class="row">
		<?php require_once(BASEPATH.'view/tour/current_position.php');?>
	</div>
	<div class="row">
		<div class="col-md-8">
	<!-- BEGIN: Show All Tour -->
            <div class="content_title">
                <h3><?php echo $tour['title']?></h3>
            </div>
            <div class="content_description">
                <p><?php echo $tour['description']?></p>
            </div>
            <div class="content_menu">
            	<!-- Nav tabs -->
  				<ul class="nav nav-tabs" role="tablist" id="tourist_detail">
   					 <li role="presentation" class="active"><a href="#tourist" aria-controls="tourist" role="tab" data-toggle="tab" aria-expanded="false">Chương trình tour</a></li>
   					 <li role="presentation"><a href="#cost_detail" aria-controls="cost_detail" role="tab" data-toggle="tab" aria-expanded="false">Bảng giá</a></li>
   					 <li role="presentation"><a href="#policy_detail" aria-controls="policy_detail" role="tab" data-toggle="tab" aria-expanded="false">Chính sách</a></li>
  				</ul>

 				 <!-- Tab panes -->
 				<div class="tab-content">
    				<div role="tabpanel" class="tab-pane active" id="tourist">
    					<?php echo $tour['content'] ?>
    				</div>
   					<div role="tabpanel" class="tab-pane" id="cost_detail">
   						<?php echo $tour['content_cost'] ?>
   					</div>
    				<div role="tabpanel" class="tab-pane" id="policy_detail">
    					<?php echo $tour['policy'] ?>
    				</div>
  				</div>
            </div>
            <div class="content_tab">
            	<div></div>
            	<div></div>
            	<div></div>
            </div>
        </div>
		<div class="col-md-4">
			<?php require_once(BASEPATH.'view/tour/sidebar.php'); ?>
		</div>
	</div>
</div>
<!--END Content detail tour --> 

<?php require_once('layout/footer.php'); ?>