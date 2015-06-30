<?php require_once('template/header.php'); ?>
<div id ="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<?php require_once('template/page_header.php'); ?>
			<div class="row">
				<?php require_once('template/current_possition.php'); ?>
			</div>
			<div class="row">
			<form action="index.php?controller=service_car&amp;action=add" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group col-md-6">
					<label for="title">Mã số hãng xe</label>
					<input type="text" name='mshx' class="form-control" id="title" />
                    <label for="title">Mã số địa điểm</label>
                   	<select name="msdd" class="form-control">
                   		<?php foreach($car_area as $key) :?>
                   			<option value="<?php echo $key['msdd'] ?>"><?php echo $key['msdd'] ?>-<?php echo $key['tendiadiem'] ?></option>
                   		<?php endforeach ?>
                   	</select>
					<label for="title">Tên hãng xe</label>
					<input class="form-control" name='tenhangxe' type="text" />
					<label for="time">Điểm đến</label>
					<input type="text" class="form-control" name='diemden' >
					<label for="total_cost">Điểm đi</label>
					<input type="text" class="form-control" name='diemdi' >
					<label for="content">Số ghế</label>
					<input class="form-control" name='soghe' type="number" />
					<label for="content_cost">Giá</label>
					<input class="form-control" name='gia' type="number">
					<label for="policy">Liên hệ</label>
					<input class="form-control" name='lienhe'/>
					<br /><br />
					<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
				</div>
					
			</form>
			</div>
		</div>
	</div>
</div>