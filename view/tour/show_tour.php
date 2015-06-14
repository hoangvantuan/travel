<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>

<!--BEGIN: Content - tour -->
<div class="container">
	<div class="row">
		<?php require_once(BASEPATH.'view/tour/current_position.php'); ?>
	</div>
	<div class="row">
		<div class="col-md-8">
	<!-- BEGIN: Show All Tour -->

<?php 
  foreach($tour as $value):
 ?>
<div class="col-md-4 tour">
    <div class="thumbnail tour_detai2">
      <a  href="#"><img class="overimg "  src=<?php echo $value['image'] ?> width="235" alt="" class="responsive-img" /></a>
            <div class="caption">
                     <h4 class="text-center tour_title">
                        <a href="#"><?php echo $value['title'] ?></a>
                     </h4>
                     <h4 class="text-center tour_time">
                          <?php echo $value['time'] ?>
                     </h4>
                     <h4 class="text-center tour_cost">
                          <?php echo $value['total_cost'] ?>
                     </h4>
            </div>
    </div>
</div>
<?php endforeach ?>
</div>
		<div class="col-md-4">
			<?php require_once(BASEPATH.'view/tour/sidebar.php'); ?>
		</div>
	</div>
</div>
<!--END Content - tour --> 

<?php require_once('layout/footer.php'); ?>