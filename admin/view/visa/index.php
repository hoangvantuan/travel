<?php require('template/header.php'); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Visa - Hộ chiếu</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i> Visa - Hộ chiếu
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=visa&amp;action=add_visapost&amp;lang=<?php echo $lang ?>">Thêm bài</a></label></div>
                <div class="col-lg-12">
                    <h2>Bảng nội dung dịch vụ Visa</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Create_at</th>
                                    <th>Update_at</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($products!=null): ?>
                                <?php  foreach($products as $key => $value): ?>
                                <tr>
                                    <?php $visa_name=get_a_record('passport_visa','passport_visa_code',$value['passport_visa_code']);?>
                                    <td><?php echo $value['passport_visa_offer_code'];?></td>
                                    <td><?php echo $visa_name['passport_visa_name'];?></td>
                                    <td><?php echo $value['title'];?></td>
                                    <td><?php echo $value['description'];?></td>
                                    <td><img src="../<?php echo $value['image'];?>" width="50"></td>
                                    <td><?php echo $value['create_at'];?></td>
                                    <td><?php echo $value['update_at'];?></td>
                                    <td> <a href="index.php?controller=visa&amp;action=change&amp;passport_visa_offer_code=<?php echo $value['passport_visa_offer_code'];?>&amp;lang=<?php echo $lang ?>">Sửa</a></td>
                                    <td><a href="index.php?controller=visa&amp;delete=<?php echo $value['passport_visa_offer_code'];?>&amp;lang=<?php echo $lang ?>">Xóa</a></td>
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