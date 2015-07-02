<?php require('template/header.php'); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dịch vụ Du học</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i> Dịch vụ Du học
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=abroad&amp;action=add_abroad&amp;lang=<?php echo $lang ?>">Thêm bài</a></label></div>
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=abroad&amp;action=add_abroad_name&amp;lang=<?php echo $lang ?>">Thêm danh mục dịch vụ Du học</a></label></div>
                <div class="col-md-4"><h5>Lọc theo Category</h5></div>
                <div class="col-md-8">
                                        <form method="POST" action="index.php?controller=abroad">
                                            <select name="abroad_id">
                                                <option <?php echo isset($selected)? "" : "selected" ?> value="0">--|--</option>
                                                <?php foreach( $abroad as $key) : ?>
                                                <option value="<?php echo $key['abroad_id'] ?>" <?php if(isset($selected)){ echo $selected ==$key['abroad_id']? "selected" : "" ;}?>><?php echo $key['abroad_name'] ?></option>
                                            <?php endforeach ?>
                                            </select>
                                        <input type="submit" value="Lọc" name="filler">
                                        </form>
        
                                </div>
                <div class="col-lg-12">
                    <h2>Bảng nội dung dịch vụ Du học</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($products!=null): ?>
                                <?php  foreach($products as $key => $value): ?>
                                <tr>
                                    <?php $abroad_name=get_a_record('abroads','abroad_id',$value['abroad_id']);?>
                                    <td><?php echo $abroad_name['abroad_name'];?></td>
                                    <td><?php echo $value['title'];?></td>
                                    <td><?php echo $value['content'];?></td>
                                    <td> <a href="index.php?controller=abroad&amp;action=change&amp;abroad_offer_id=<?php echo $value['abroad_offer_id'];?>&amp;lang=<?php echo $lang ?>">Sửa</a></td>
                                    <td><a href="index.php?controller=abroad&amp;delete=<?php echo $value['abroad_offer_id'];?>&amp;lang=<?php echo $lang ?>">Xóa</a></td>
                                </tr>
                                <?php endforeach ?>
                                <?php endif ?>
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