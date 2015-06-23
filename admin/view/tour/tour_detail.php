<?php require_once('template/header.php'); ?>
<!--BEGIN: Content detail tour -->
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php require_once('template/page_header.php'); ?>
            <div class="row">
                <?php require_once('template/current_possition.php'); ?>
            </div>
            <div class="row"><h4  class="bg-info text-center"><?php if(isset($success)) echo $success ?></h4></div>
            <div class="row"><h4  class="bg-info text-center"><?php if(isset($image_error)) echo $image_error ?></h4></div>
            <div class="col-md-2"><label><i class="fa fa-upload"></i> <a href="index.php?controller=tour&amp;action=edit&amp;tour_content_code=<?php echo $tour['tour_content_code'] ?>&amp;lang=<?php echo $lang ?>">Sửa</a></label></div>
            <div class="col-md-2"><label><i class="glyphicon glyphicon-trash"></i></i> <a href="index.php?controller=tour&amp;action=delete&amp;tour_content_code=<?php echo $tour['tour_content_code'] ?>&amp;lang=<?php echo $lang ?>">Xóa</a></label></div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN: Show All Tour -->
                    <div class="content_title">
                        <h3><?php echo $tour['title']?></h3>
                    </div>
                    <div class="content_description">
                        <p><?php echo $tour['description']?></p>
                    </div>
             <div class="content_menu">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="tourist_detail">
                     <li role="presentation" class="active"><a href="#tourist" aria-controls="tourist" role="tab" data-toggle="tab" aria-expanded="false">Chương trình tour</a></li>
                     <li role="presentation"><a href="#cost_detail" aria-controls="cost_detail" role="tab" data-toggle="tab" aria-expanded="false">Giá tour và Dịch vụ</a></li>
                     <li role="presentation"><a href="#possition" aria-controls="possition" role="tab" data-toggle="tab" aria-expanded="false">Vị trí điểm đến</a></li>
                    <li role="presentation"><a href="#image_relate" aria-controls="image_relate" role="tab" data-toggle="tab" aria-expanded="false">Ảnh liên quan</a></li>
                </ul>

                 <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tourist">
                        <?php echo $tour['content'] ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cost_detail">
                        <?php echo $tour['content_cost'] ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="possition">
                       <div class="widget-content">
                            <iframe class="google-map" height="300" src="<?php echo $tour['possition'] ?>"  frameborder="0" style="border:0"></iframe>
                        </div><!-- widget content -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="image_relate">
                        <?php echo $tour['image_relate'] ?>
            </div>
                </div>
            </div>
                    <div class="content_tab">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END Content detail tour -->