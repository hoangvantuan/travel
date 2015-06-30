<?php require_once('template/header.php'); ?>
<div id ="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header"><?php echo $title ?></h1>
            <p class="text-info"><?php if(isset($success)) echo $success ?></p>
    </div>
</div>
			<div class="row">
				<h3>Danh sach DD</h3>
				
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>MSDD</th>
									<th>Tên DD</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($all_place as $key): ?>
								<tr>
									<td><?php echo $key['msdd'] ?></td>
									<td><?php echo $key['tendiadiem'] ?></td>
									<td><a href="index.php?lang=<?php echo $lang ?>&amp;controller=service_car&amp;action=add_place&amp;delete=<?php echo $key['msdd'] ?>">Xóa</a></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
			</div>
			<div class="row">
			<form action="index.php?controller=service_car&amp;action=add_place" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group col-md-6">
					<label for="msdd">Mã số DD</label>
					<input type="text" name='msdd' class="form-control" id="msdd" />
                    <label for="tendiadiem">Tên địa điểm</label>
                    <input type="text" name="tendiadiem" class="form-control" id="tendiadiem">
					<br /><br />
					<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>