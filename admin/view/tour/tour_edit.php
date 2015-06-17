<?php require_once('template/header.php'); ?>
<div id ="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<?php require_once('template/page_header.php'); ?>
			<div class="row">
				<?php require_once('template/current_possition.php'); ?>
			</div>
			<div class="row">
			<form action="index.php?controller=tour&amp;action=edit&amp;tour_content_code=<?php echo $tour['tour_content_code']; ?>&amp;lang=<?php echo $lang ?>" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Tiêu đề</label>
					<input type="text" name='title' class="form-control" id="title" value="<?php echo $tour['title'] ?>" />
                    <label for="upload_image">Hình ảnh</label><img src=<?php echo ROOTPATH.$tour['image'] ?> alt="" width="235"/>
                    <input type="file" name="upload_image" id="upload_image">
					<label for="description">Miêu tả</label>
					<textarea class="form-control" name='description' id="description" style="width:60%;" rows="20"><?php echo $tour['description'] ?></textarea>
					<label for="time">Thời gian</label>
					<input type="text" class="form-control" name='time' id="time" value="<?php echo $tour['time'] ?>">
					<label for="total_cost">Tổng chi phí</label>
					<input type="text" class="form-control" name='total_cost' id="total_cost" value="<?php echo $tour['total_cost'] ?>">
					<label for="content">Nội dung chương trình</label>
					<textarea class="form-control" style="width:60%;" name='content' rows="20"><?php echo $tour['content'] ?></textarea>
					<label for="content_cost">Bảng giá</label>
					<textarea class="form-control" style="width:60%;" name='content_cost' rows="20"><?php echo $tour['content_cost'] ?></textarea>
					<label for="policy">Chính sách</label>
					<textarea class="form-control" name='policy' style="width:60%;" rows="20"><?php echo $tour['policy'] ?></textarea>
				</div>
					<button  type="submit" name="submit" class="btn btn-primary">Chỉnh Sửa</button>
			</form>
			</div>
		</div>
	</div>
</div>