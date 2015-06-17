<div class="row">
	<div class="col-md-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=tour&amp;action=add&amp;lang=<?php echo $lang ?>">Thêm Tour</a></label></div>
	<div class="col-md-12"><h3 text-center bg-info><?php if(isset($success)) echo $success; ?></h3></div>
	<div class="col-md-12">
		<h2>Bảng danh sách các tour</h2>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên Tour</th>
						<th>Thời Gian</th>
						<th>Giá</th>
						<th>Ảnh</th>
						<th>Tạo</th>
						<th>Cập nhật</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($tour as $key => $value): ?>
					<tr>
						<td><?php echo $key +1 ?></td>
						<td><a href="index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code=<?php echo $value['tour_content_code'] ?>" ><?php echo $value['title'] ?></a></td>
						<td><?php echo $value['time'] ?></td>
						<td><?php echo $value['total_cost'] ?></td>
						<td><img src=<?php echo ROOTPATH.$value['image'] ?> width="50"></td>
						<td><?php echo $value['create_at'] ?></td>
						<td><?php echo $value['update_at'] ?></td>
						<td><a href="index.php?controller=tour&amp;action=edit&amp;tour_content_code=<?php echo $value['tour_content_code'] ?>&amp;lang=<?php echo $lang ?>">Sửa</a></td>
						<td><a href="index.php?controller=tour&amp;action=delete&amp;tour_content_code=<?php echo $value['tour_content_code'] ?>&amp;lang=<?php echo $lang ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
			
	</div>
</div>