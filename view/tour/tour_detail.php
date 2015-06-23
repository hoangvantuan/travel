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
    					<div class="widget-content">
                  <iframe class="google-map" height="300" src="<?php echo $tour['possition'] ?>"  frameborder="0" style="border:0"></iframe>
              </div><!-- widget content -->
    				</div>
            <div role="tabpanel" class="tab-pane" id="image_relate">
              <?php echo $tour['image_relate']; ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="book_tour">
              <div class="row">
                  <form class="form-horizontal" method="POST" action="index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=book_tour&amp;tour_content_code=<?php echo $tour['tour_content_code'] ?>">
                    <!-- dat tour-->
                    <div class="form-group">
                      <label for="title" class="col-md-2">Đặt Tour</label>
                      <div class="col-md-10">
                        <p class="form-control-static"><?php echo $tour['title'] ?></p>
                      </div>
                    </div>
                    <!-- ngay khoi hanh-->
                    <div class="form-group">
                      <label for="start_day" class="col-md-2">Ngày khởi hành(*)</label>
                      <div class="col-md-4">
                        <input type="date" name="start_day" id="start_day" class="form-control" value="" required="required" title="">
                      </div>
                      <label for="end_day" class="col-md-2">Ngày kết thúc(*)</label>
                      <div class="col-md-4">
                        <input type="date" name="end_day" id="start_day" class="form-control" value="" required="required" title="">
                      </div>
                    </div>
                    <!-- so luong nguoi-->
                    <div class="form-group">
                      <label for="number_people" class="col-md-2">Số người lớn</label>
                      <div class="col-md-2">
                        <input type="number" name="number_people" id="number_people" class="form-control" >
                      </div>
                      <label for="number_people_15" class="col-md-2">Số trẻ em 1-5</label>
                      <div class="col-md-2">
                        <input type="number" name="number_people_12" id="number_people_15" class="form-control" >
                      </div>
                      <label for="number_people_612" class="col-md-2">Số trẻ em 6-12</label>
                      <div class="col-md-2">
                        <input type="number"  name="number_people_612" id="number_people_612" class="form-control" >
                      </div>
                    </div>
                    <!-- ho ten-->
                    <div class="form-group">
                      <label for="name" class="col-md-2">Họ tên(*)</label>
                      <div class="col-md-2">
                        <select name="before_name" class="form-control">
                        <option value="Ông">Ông</option>
                        <option value="Bà">Bà</option>
                        <option value="Anh">Anh</option>
                        <option value="Chị">Chị</option>
                      </select>
                      </div>
                      <div class="col-md-8">
                        <input type="text" id="name" required="required" class="form-control">
                      </div>
                    </div>
                    <!-- dia chi lien he-->
                    <div class="form-group">
                      <label for="address" class="col-md-2">Địa chỉ liên hệ(*)</label>
                      <div class="col-md-10">
                        <input type="text" name="address" id="address" required="required" class="form-control">
                      </div>
                    </div>
                    <!-- dien thoai co dinh-->
                    <div class="form-group">
                      <label for="static_phone" class="col-md-2">Điện thoại cố định</label>
                      <div class="col-md-10">
                        <input type="number" name="static_phone" id="static_phone" required="required" class="form-control">
                      </div>
                    </div>
                    <!-- dien thoai di dong -->
                    <div class="form-group">
                      <label for="phone" class="col-md-2">Điện thoại di động(*)</label>
                      <div class="col-md-10">
                        <input type="number" name="phone" id="phone" required="required" class="form-control">
                      </div>
                    </div>
                    <!-- email-->
                    <div class="form-group">
                      <label for="email" class="col-md-2">Email(*)</label>
                      <div class="col-md-10">
                        <input type="email" name="email" id="email" required="required" class="form-control">
                      </div>
                    </div>
                    <!-- dia chi lien he-->
                    <div class="form-group">
                      <label for="note" class="col-md-2">Ghi chú thêm</label>
                      <div class="col-md-10">
                        <textarea class="form-control" id="note" name="note" cols="2"></textarea>
                      </div>
                    </div>
                    <button type="submit" name="book_tour" class="btn btn-default pull-right">Đặt Tour</button>
                  </form>
              </div>
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