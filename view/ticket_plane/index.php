<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>

<!--BEGIN: Content - ticket_plane -->
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
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=ticket_plane&amp;ticket_plane_id='.$ticket_plane_id.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$id['ticket_plane_name'].'</span></a>';
                ?>
            </span>
        </li>
        <?php if (isset($ticket_plane_content)):?>
        <li>
            <span>
            <?php
                echo '<a itemprop="url" href="index.php?lang='.$lang.'&amp;controller=ticket_plane&amp;ticket_plane_id='.$ticket_plane_id.'&amp;ticket_plane_content_id='.$ticket_plane_content_id.'"><i class="fa fa-hacker-news"></i><span itemprop="title"> '.$ticket_plane_content['ticket_plane_title'].'</span></a>';
                ?>
            </span>
        </li>
        <?php endif?>
    </ol>
    </div>
    <!-- BEGIN: Show All ticket_plane -->
<div class="clearfix" style="height:500px;">
        <?php if (!isset($ticket_plane_content_id)): ?>
        <div class="col-md-8">
            <div class="tab-pane" id="tabsupdatecontent-4">
                <div class="gridcontainer-price-today gridcontainer-list-airbyCate" id="gridcontainer-price-today">
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($content as $key => $value):?>
                            <li class="list-group-item">
                                
                                
                                <div class="col-md-9">
                                    <h4 class="list-group-item-heading">
                                        <a href="index.php?lang=<?php echo $lang ?>&amp;controller=ticket_plane&amp;ticket_plane_id=<?php echo $value['ticket_plane_id'];?>&amp;ticket_plane_content_id=<?php echo $value['ticket_plane_content_id'];?>"><?php echo $value['ticket_plane_title'];?></a>
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
                if ($value['ticket_plane_content_id']==$ticket_plane_content_id) {
                    if ($value['ticket_plane_content']!="<script>img_find('contents');</script>") {
                        echo $value['ticket_plane_content'];
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
                <a href="#" class="list-group-item active">Dịch vụ Vé máy bay</a>
                <?php
                    foreach ($ticket_plane_name as $key => $value) {
                        echo '<a class="list-group-item" href="index.php?lang='.$lang.'&amp;controller=ticket_plane&amp;ticket_plane_id='.$value['ticket_plane_id'].'"> '.$value['ticket_plane_name'].'</a>';
                    }
                    
                    ?>
            </div>
        </div>
    </div>
</div>
<!--END Content - tour --> 

<?php require_once('layout/footer.php'); ?>