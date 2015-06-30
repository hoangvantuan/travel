<?php require_once('template/header.php'); ?>
<div id ="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<?php require_once('template/page_header.php'); ?>
			<div class="row">
				<?php require_once('template/current_possition.php'); ?>
			</div>
			<div class="row">
			<form action="index.php?controller=service_car&amp;action=edit&amp;code=<?php echo $service['mshx']; ?>&amp;lang=<?php echo $lang ?>" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Mã số hãng xe</label>
					<input type="text" name='mshx' class="form-control" id="title" value="<?php echo $service['mshx'] ?>" />
                    <label for="title">Mã số địa điểm</label><input type="text" name='msdd' class="form-control" id="title" value="<?php echo $service['msdd'] ?>" />
					<label for="title">Tên hãng xe</label>
					<input class="form-control" name='tenhangxe' value = "<?php echo $service['tenhangxe']?>"/>
					<label for="time">Điểm đến</label>
					<input type="text" class="form-control" name='diemden' value="<?php echo $service['diemden'] ?>">
					<label for="total_cost">Điểm đi</label>
					<input type="text" class="form-control" name='diemdi' value="<?php echo $service['diemdi'] ?>">
					<label for="content">Số ghế</label>
					<input class="form-control" name='soghe'value="<?php echo $service['soghe'];?>"/>
					<label for="content_cost">Giá</label>
					<input class="form-control" name='gia' value="<?php echo $service['gia'];?>"/>
					<label for="policy">Liên hệ</label>
					<input class="form-control" name='lienhe' value="<?php echo $service['lienhe'] ?>"/>
				</div>
					<button  type="submit" name="submit" class="btn btn-primary">Chỉnh Sửa</button>
			</form>
			</div>
		</div>
	</div>
</div>