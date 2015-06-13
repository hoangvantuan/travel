<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>
<?php require_once('layout/slider.php'); ?>

<!--BEGIN: Content - Home -->
<div class="container-fluid tour-visa-new">
	<div class="row show_tour">
		<?php require_once(BASEPATH.'view/home/show_tour.php'); ?>
	</div>
	<div class="row show_visa_news">
		<?php require_once(BASEPATH.'view/home/show_visa_news.php'); ?>
	</div>
</div>
<!--END Content - Home --> 

<?php require_once('layout/footer.php'); ?>