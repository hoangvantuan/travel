<?php require_once('layout/head.php');?>
<?php require_once('layout/header.php'); ?>
<?php require_once('layout/navigation.php'); ?>
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
               <li>
                  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="#" itemprop="url">
                  <i class="fa fa-hacker-news"></i>&nbsp;
                  <span itemprop="title">Tin tức</span>
                  </a>
                  </span>
               </li>
               <li class="active">
                  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="#" itemprop="url">
                  <i class="fa fa-hacker-news"></i>&nbsp;<span itemprop="title"><?php echo $title_news;?></span>
                  </a>
                  </span>
               </li>
            </ol>
            <div class="clearfix">
               <div class="col-md-8">
                  <h2>
                     <?php echo $title_news;?>
                  </h2>
                  <div class="contentDetails">
                    <p>
						<?php
							echo $content_news;
						?>
						
					</p>
                  </div>
               </div>
               <div class="col-md-4">
                  
               </div>
               <div class="clearfix">
               </div>
            </div>
         </div>
         <div class="height-20"></div>
      </article>
<?php require_once('layout/footer.php'); ?>