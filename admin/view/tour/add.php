<?php require_once('template/header.php'); ?>
<div id ="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<?php require_once('template/page_header.php'); ?>
			<div class="row">
				<?php require_once('template/current_possition.php'); ?>
			</div>
			<div class="row"><h4  class="bg-info text-center"><?php if(isset($success)) echo $success ?></h4></div>
			<div class="row"><h4  class="bg-info text-center"><?php if(isset($image_error)) echo $image_error ?></h4></div>
			<div class="row">
			<form action="index.php?controller=tour&amp;action=add" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name='title' class="form-control"  placeholder='Tiêu đề' required ="required"/>
                    <input type="file" name="upload_image" required ="required">
                    <input type="text" class="form-control" name='time' placeholder="Tổng thời gian dự kiến" required ="required">
					<input type="text" class="form-control" name='total_cost' id="total_cost" placeholder="Tổng giá dự kiến"required ="required" />
					<select name="tour_region_name">
					<?php foreach ($tour_region as $value):?>
						<option value="<?php echo $value['tour_region_code'] ?>"><?php echo $value['tour_region_name'] ?></option>
					<?php endforeach ?>
					</select>
					<textarea class="form-control" name='description' id="description" style="width:60%;" rows="20" >Miêu tả tour du lịch</textarea>
					<textarea class="form-control" style="width:60%;" name='content' rows="20" >Nội dung tour du lịch</textarea>
					<textarea class="form-control" style="width:60%;" name='content_cost' rows="20" >Giá tour và dịch vụ</textarea>
					<textarea class="form-control" name='possition' style="width:60%;" rows="20" >Địa chỉ bản đồ</textarea>
					<textarea class="form-control" name='image_relate' style="width:60%;" rows="20" >Ảnh liên quan</textarea>
				</div>
					<button  type="submit" name="submit" class="btn btn-primary">Thêm</button>
			</form>
			</div>
		</div>
	</div>
</div>