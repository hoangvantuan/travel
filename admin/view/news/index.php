<?php require_once('template/header.php'); ?>
	<div id="wrapper">
    	<div id="page-wrapper">
			<div class="container-fluid">
				<?php require_once('template/page_header.php'); ?>
				<?php require('template/header.php'); ?>
							<div class="row">
								<div class="col-lg-12">
									<h1 class="page-header">Tin tức - Sự kiện</h1>
									<ol class="breadcrumb">
										<li>
											<i class="fa fa-dashboard"></i>  <a href="index.php?lang=<?php echo $lang ?>&amp;controller=dashboard">Bảng điều khiển</a>
										</li>
										<li class="active">
											<i class="glyphicon glyphicon-refresh"></i> Tin tức sự kiện
										</li>
									</ol>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12"><label><i class="fa fa-upload"></i> <a href="index.php?lang=<?php echo $lang ?>&amp;controller=news&action=add_news">Thêm tin mới</a></label></div>
								<div class="col-md-4"><h5>Lọc theo Category</h5></div>
									<div class="col-md-8">
										<form method="POST" action="index.php?controller=news">
											<select name="news_event_code">
												<option <?php echo isset($selected)? "" : "selected" ?> value="0">--|--</option>
												<?php foreach( $news_event as $key) : ?>
												<option value="<?php echo $key['news_event_code'] ?>" <?php if(isset($selected)){ echo $selected ==$key['news_event_code']? "selected" : "" ;}?>><?php echo $key['new_event_name'] ?></option>
											<?php endforeach ?>
											</select>
										<input type="submit" value="Lọc" name="filler">
										</form>
		
								</div>
								<div class="col-md-12">
									<h2>Các tin tức sự kiện</h2>

									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
				
													<th>Tên</th>
													<th>Miêu tả</th>
													<th>Hình ảnh</th>
													<th>Nội Dung</th>
													<th>Sửa</th>
													<th>Xóa</th>
												</tr>
											</thead>
											<tbody>
											<?php
													if(isset($news)){
													
														foreach($news as $value){
															echo "
															<tr>
														
																<td>".$value['title']."</td>
																<td>".$value['description']."</td>
																<td><img src='../".$value['image']."' width='50'></td>
																<td>".$value["content"]."</td>
																<td><a href='index.php?lang=<?php echo $lang ?>&amp;controller=news&action=change_news&code=".$value["news_event_code"]."'>Sửa</a></td>
																<td><a href='index.php?lang=<?php echo $lang ?>&amp;controller=news&action=delete_news&code=".$value["news_event_code"]."'>Xóa</a></td>
															</tr>
															";
														
														}
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- end row -->
							<?php //var_dump($products);?>
					
				
			</div>
		</div>
	</div>