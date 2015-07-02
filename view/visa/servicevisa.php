<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>
<!--BEGIN: Content - Home -->
<div class="container">
    <div class="height-20"></div>
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
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=visa&action=servicevisa&passport_visa_code='.$passport_visa_code.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$id['passport_visa_name'].'</span></a>';
                ?>
            </span>
        </li>
        <?php if (isset($visa_offer)):?>
        <li>
            <span>
            <?php
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=visa&action=servicevisa&passport_visa_code='.$passport_visa_code.'&amp;pass_offer='.$pass_offer.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$visa_offer['title'].'</span></a>';
                ?>
        <div class="col-md-8">
            <div class="tab-pane" id="tabsupdatecontent-4">
                <div class="gridcontainer-price-today gridcontainer-list-airbyCate" id="gridcontainer-price-today">
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($content as $key => $value):?>
                            <li class="list-group-item">
                                
                                <div class="col-md-3">
                                    <img class="img-responsive"  src="<?php echo $value['image'];?>" />
                                </div>
                                <div class="col-md-9">
            </span>
        </li>
        <?php endif?>
    </ol>
    <div class="clearfix" style="height:500px;">
        <?php if (!isset($pass_offer)): ?>
                                    <h4 class="list-group-item-heading"><i class="fa fa-cc-visa"></i>
                                        <a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&action=servicevisa&passport_visa_code=<?php echo $value['passport_visa_code'];?>&pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title'];?></a>
                                    </h4>
                                    <p class="list-group-item-text decsrption-des-airrline"><i class="fa fa-angle-double-right"></i><?php echo $value['description'];?></p>
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
                if ($value['passport_visa_offer_code']==$pass_offer) {
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
                <a href="#" class="list-group-item active"><span class="fa fa-cc-visa"></span> VISA</a>
                <?php
                    foreach ($passport_visa_name as $key => $value) {
                        echo '<a class="list-group-item" href="index.php?lang='.$lang.'&amp;controller=visa&action=servicevisa&passport_visa_code='.$value['passport_visa_code'].'"><span class="fa fa-cc-visa"></span> '.$value['passport_visa_name'].'</a>';
                    }
                    
                    ?>
            </div>
        </div>
    </div>
    <!--clearfix content - Visa -->
    <!-- VnDesigner--> 
</div>
<!--END Contain - Visa --> 
<?php require_once('layout/footer.php'); ?>