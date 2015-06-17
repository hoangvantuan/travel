<ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard">Bảng điều khiển</a>
        </li>
        <?php foreach ($current_possition as $key):?>
        <li class="active">
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href=<?php echo $key['link'] ?> itemprop="url">
                    <i class="glyphicon glyphicon-refresh"></i>&nbsp;
                    <span itemprop="title"><?php echo $key['name'] ?></span>
                </a>
            </span>
        </li>
    <?php endforeach ?>
</ol>