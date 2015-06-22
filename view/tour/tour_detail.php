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
   					 <li role="presentation"><a href="#cost_detail" aria-controls="cost_detail" role="tab" data-toggle="tab" aria-expanded="false">Giá tour và Dịch vụ</a></li>
   					 <li role="presentation"><a href="#possition" aria-controls="possition" role="tab" data-toggle="tab" aria-expanded="false">Vị trí điểm đến</a></li>
             <li role="presentation"><a href="#image_relate" aria-controls="image_relate" role="tab" data-toggle="tab" aria-expanded="false">Ảnh liên quan</a></li>
             <li role="presentation"><a href="#book_tour" aria-controls="book_tour" role="tab" data-toggle="tab" aria-expanded="false">Đặt Tour</a></li>
  				</ul>

 				 <!-- Tab panes -->
 				<div class="tab-content">
    				<div role="tabpanel" class="tab-pane active" id="tourist">
    					<?php echo $tour['content'] ?>
    				</div>
   					<div role="tabpanel" class="tab-pane" id="cost_detail">
   						<?php echo $tour['content_cost'] ?>
   					</div>
    				<div role="tabpanel" class="tab-pane" id="possition">
    					<?php echo $tour['possition'] ?>
    				</div>
            <div role="tabpanel" class="tab-pane" id="image_relate">
              <?php echo $tour['image_relate']; ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="book_tour">
              <!-- book tour-->
            </div>
  				</div>
            </div>
            <div class="content_tab">
            	<div></div>
            	<div></div>
            	<div></div>
            </div>
            <hr />
            <div class="col-md-12">
              <div class="title_relate_tour"><h3>Các Tour liên quan</h3></div>
              <div class="row">
              <?php foreach($tour_relate as $value): ?>
                <div class="col-md-4">
                  <div class="thumbnail"> 
                   <a  href='index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=tour_detail&amp;tour_content_code=<?php echo $value["tour_content_code"] ?>'><img class="overimg"  src=<?php echo $value['image'] ?> alt="" class="responsive-img" /></a>
                    <div class="caption">
                       <h4 class="text-center tour_title">
                        <a href='index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=tour_detail&amp;tour_content_code=<?php echo $value["tour_content_code"] ?>'><?php echo $value['title'] ?></a>
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
            </div>
        </div>
		<div class="col-md-4">
			<?php require_once(BASEPATH.'view/tour/sidebar.php'); ?>
		</div>
	</div>
  <hr />
</div>
  
<!--END Content detail tour --> 

<?php require_once('layout/footer.php'); ?>