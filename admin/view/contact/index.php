<?php require('template/header.php'); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact - Liên hệ</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i> Contact - Liên hệ
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Bảng nội dung liên hệ</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($products!=null): ?>
                                <?php  foreach($products as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value['name'];?></td>
                                    <td><?php echo $value['tel'];?></td>
                                    <td><?php echo $value['email'];?></td>
                                    <td><?php echo $value['title'];?></td>
                                    <td><?php echo $value['content'];?></td>
                                    <td><a href="index.php?controller=contact&amp;delete=<?php echo $value['email'];?>&amp;lang=<?php echo $lang ?>">Xóa</a></td>
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