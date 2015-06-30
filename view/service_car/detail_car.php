<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>
<!--BEGIN: Content - news -->
<div class="container">
    <div class="row">
        <article>
            <div class="container">
                <div class="height-20"></div>
                <ol class="breadcrumb">
                    <li>
                        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.php" itemprop="url">
                        <i class="fa fa-home"></i>&nbsp;
                        <span itemprop="title">AD Tourist</span>
                        </a>
                        </span>
                    </li>
                    <li class="active">
                        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.php?controller=service_car" itemprop="url">
                        <i class="fa fa-hacker-news"></i>&nbsp;
                        <span itemprop="title">Dịch vụ xe</span>
                        </a>
                        </span>
                    </li>
                </ol>
                <div class="col-md-8">
                    <!-- BEGIN: Show All service car -->
                    <div class="table-responsive">
                        <h3>Danh sách các hãng xe</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Điểm đi</th>
                                    <th>Điểm đến</th>
                                    <th>Số ghế</th>
                                    <th>Giá</th>
                                    <th>Liên hệ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($service as $value):?>
                                <tr>
                                    <td><?php echo $value['tenhangxe'] ?></td>
                                    <td><?php echo $value['diemdi'] ?></td>
                                    <td><?php echo $value['diemden'] ?></td>
                                    <td><?php echo $value['soghe'] ?></td>
                                    <td><?php echo $value['gia'] ?></td>
                                    <td><?php echo $value['lienhe'] ?></td>
                                </tr>
                                <?php endforeach ?>						
                            </tbody>
                        </table>
                    </div>
                </div>
        <div class="col-md-4">
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading incountry">
                        <h3 class="panel-title"><?php echo $lang =='en' ? 'Domestic tourism' : 'Danh sách địa điểm' ?>
                            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
                        </h3>
                        
                    </div>
                    <div class="panel-body incountry">
                        <div class="hidden-xs incountry-list">
                            <ul class="list-group">
                            <?php foreach($area as $value):?>
                                <?php echo "<li class='list-group-item'><a href='index.php?controller=service_car&action=detail_service&code=".$value['msdd']."'>".$value['tendiadiem']."</a></li>"?>
                            <?php endforeach ?>
                            </ul>               
                        </div>

                    </div>
                </div>
            </div>
        </div>
            </div>
    </div>
    <div class="height-20"></div>
    </article>
</div>
</div>
<!--END Content - news --> 
<?php require_once('layout/footer.php'); ?>