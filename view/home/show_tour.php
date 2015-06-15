<!-- BEGIN: Show All Tour -->

<?php 
  foreach($tour as $value):
 ?>
<div class="col-md-3 tour">
    <div class="thumbnail tour_detail">
    	<a  href='index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code=<?php echo $value["tour_content_code"] ?>'><img class="overimg "  src=<?php echo $value['image'] ?> width="235" alt="" class="responsive-img" /></a>
            <div class="caption">
               		<h4 class="text-center tour_title">
                  		<a href='index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code=<?php echo $value["tour_content_code"] ?>'><?php echo $value['title'] ?></a>
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
<!-- END : Show All tour -->
