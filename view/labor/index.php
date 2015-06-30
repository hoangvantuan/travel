<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>

<!--BEGIN: Content - labor -->
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
        <li>
            <span>
            <a href="index.php" itemprop="url">
            <i class="fa fa-home"></i>&nbsp;
            <span itemprop="title">AD Tourist</span>
            </a>
            </span>
        </li>
        <li class="active">
            <span >
            <?php
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=labor&amp;labor_id='.$labor_id.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$id['labor_name'].'</span></a>';
                ?>
            </span>
        </li>
        <?php if (isset($labor_content)):?>
        <li>
            <span>
            <?php
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=labor&amp;labor_id='.$labor_id.'&amp;labor_content_id='.$labor_content_id.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$labor_content['title'].'</span></a>';
                ?>
            </span>
        </li>
        <?php endif?>
    </ol>
    </div>
    <!-- BEGIN: Show All labor -->
<div class="clearfix" style="height:500px;">
        <?php if (!isset($labor_content_id)): ?>
        <div class="col-md-8">
            <div class="tab-pane" id="tabsupdatecontent-4">
                <div class="gridcontainer-price-today gridcontainer-list-airbyCate" id="gridcontainer-price-today">
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($content as $key => $value):?>
                            <li class="list-group-item">
                                
                                
                                <div class="col-md-9">
                                    <h4 class="list-group-item-heading">
                                        <a href="index.php?lang=<?php echo $lang ?>&amp;controller=labor&amp;labor_id=<?php echo $value['labor_id'];?>&amp;labor_content_id=<?php echo $value['labor_content_id'];?>"><?php echo $value['title'];?></a>
                                    </h4>
                                </div>
                                <div class="clearfix"></div>
                                
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php else:?>
        <div class="col-md-8">
            <div class="tab-pane" id="tabsupdatecontent-4">
                <div class="gridcontainer-price-today gridcontainer-list-airbyCate" id="gridcontainer-price-today">
                    <div class="panel-body">
        <?php
            foreach ($content as $key => $value) {
                if ($value['labor_content_id']==$labor_content_id) {
                    if ($value['content']!="<script>img_find('contents');</script>") {
                        echo $value['content'];
                    }
                    else echo 'Chưa có nội dung !';
                }
             } 
             //echo $visa_offer['title'];
            ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">Dịch vụ xuất khẩu lao động</a>
                <?php
                    foreach ($labor_name as $key => $value) {
                        echo '<a class="list-group-item" href="index.php?lang='.$lang.'&amp;controller=labor&amp;labor_id='.$value['labor_id'].'"> '.$value['labor_name'].'</a>';
                    }
                    
                    ?>
            </div>
        </div>
    </div>
</div>
<!--END Content - tour --> 

<?php require_once('layout/footer.php'); ?>