<div class="row">
	<div class="col-md-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=service_car&amp;action=add&amp;lang=<?php echo $lang ?>">Thêm dịch vụ</a></label></div>
	<div class="col-md-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=service_car&amp;action=add_place&amp;lang=<?php echo $lang ?>">Thêm địa điểm</a></label></div>
	<div class="col-md-12"><h3 text-center bg-info><?php if(isset($success)) echo $success; ?></h3></div>
	<div class="col-md-12">
		<h2>Danh sách các tuyến xe</h2>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Địa điểm</th>
						<th>Tên hãng xe</th>
						<th>Điểm đi</th>
						<th>Điểm đến</th>
						<th>Số ghế</th>
						<th>Giá</th>
						<th>Liên hệ</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($service as $key => $value): ?>
					<?php $tendiadiem = get_a_record('car_area','msdd',$value['msdd']) ?>
					<tr>
						<td><?php echo $tendiadiem['tendiadiem'] ?></td>
						<td><?php echo $value['tenhangxe'] ?></td>
						<td><?php echo $value['diemdi'] ?></td>
						<td><?php echo $value['diemden'] ?></td>
						<td><?php echo $value['soghe'] ?></td>
						<td><?php echo $value['gia']?></td>
						<td><?php echo $value['lienhe']?></td>
						<td><a href="index.php?controller=service_car&action=edit&code=<?php echo $value['mshx'] ?>&lang=<?php echo $lang ?>">Sửa</a></td>
						<td><a href="index.php?controller=service_car&action=delete&code=<?php echo $value['mshx'] ?>&lang=<?php echo $lang ?>"><i class="glyphicon glyphicon-trash"></i>Xóa</a></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
			
	</div>
</div>