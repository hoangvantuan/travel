<?php require('template/header.php'); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dịch vụ xuất khẩu lao động</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i> Dịch vụ xuất khẩu lao động
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=labor&amp;action=add_labor&amp;lang=<?php echo $lang ?>">Thêm bài</a></label></div>
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=labor&amp;action=add_labor_name&amp;lang=<?php echo $lang ?>">Thêm danh mục dịch vụ xuất khẩu lao động</a></label></div>
                <div class="col-lg-12">
                    <h2>Bảng nội dung dịch vụ xuất khẩu lao động</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
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
                                    <?php $labor_name=get_a_record('labor','labor_id',$value['labor_id']);?>
                                    <td><?php echo $value['labor_content_id'];?></td>
                                    <td><?php echo $labor_name['labor_name'];?></td>
                                    <td><?php echo $value['title'];?></td>
                                    <td><?php echo $value['content'];?></td>
                                    <td> <a href="index.php?controller=labor&amp;action=change&amp;labor_content_id=<?php echo $value['labor_content_id'];?>&amp;lang=<?php echo $lang ?>">Sửa</a></td>
                                    <td><a href="index.php?controller=labor&amp;delete=<?php echo $value['labor_content_id'];?>&amp;lang=<?php echo $lang ?>">Xóa</a></td>
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