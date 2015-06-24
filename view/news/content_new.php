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
                  <a href="index.php?lang=<?php echo $lang ?>&amp;controller=news" itemprop="url">
                  <i class="fa fa-hacker-news"></i>&nbsp;
                  <span itemprop="title">Tin tức</span>
                  </a>
                  </span>
               </li>
               <li class="active">
                  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="index.php?lang=<?php echo $lang ?>&amp;controller=news&amp;news_event_code=<?php echo $news_event['news_event_code'] ?>" itemprop="url">
                  <i class="fa fa-hacker-news"></i>&nbsp;<span itemprop="title"><?php echo $news_event['new_event_name']?></span>
                  </a>
                  </span>
               </li>
            </ol>
            <div class="clearfix">
               <div class="col-md-8">
                  <h2>
                     <?php echo $news_event_content['title'];?>
                  </h2>
                  <p><?php echo $news_event_content['description'] ?></p>
                  <div class="contentDetails">
                    <p>
						<?php
							echo $news_event_content['content'];
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