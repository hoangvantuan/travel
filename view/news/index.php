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
                  <a href="#" itemprop="url">
                  <i class="fa fa-hacker-news"></i>&nbsp;
                  <span itemprop="title">Tin tức</span>
                  </a>
                  </span>
               </li>
            </ol>
            <div class="clearfix">
               <div class="col-md-8">
                  <div class="tab-pane" id="tabsupdatecontent-0">
                     <div class="gridcontainer-price-today gridcontainer-list-airbyCate" id="gridcontainer-price-today">
						 <div class='panel-body'>
							 <?php if(isset($news) && isset($data_news)){
								 foreach($data_news as $value)
									 echo "
										   <div class='row'>
											  <div class='col-md-4'>
												 <img class='img-responsive' alt='".$value["description"]."' src='".$value['image']."' />
											  </div>
											  <div class='col-md-8'>
												 <h4 class='list-group-item-heading heading-news'>
													<i class='fa fa-newspaper-o'></i>&nbsp;
													<a href='index.php?controller=news&action=detail_news&news_code=".$value['news_event_code']."' title='".$value['title']."'>".$value['title']."</a>
												 </h4>
												 <p class='list-group-item-text decsrption-des-airrline'><i class='fa fa-angle-double-right'></i>&nbsp;".$value['description'].".</p>
											  </div>
											  <div class='clearfix'></div>
											  <hr />
										   </div>
										
										"; 
								}?>
							</div>
                        <div class="panel-footer">
                           <div class="row">
                              <div class="col-md-6">
                              </div>
                              <div class="col-md-6">
                                 <div class="pull-right">
                                    <ul class="pagination" style="margin:0">
                                       <li class="disabled"><a data-ajax="true" data-ajax-loading="#loading-infoAirOnCate-today" data-ajax-mode="replace" data-ajax-update="#tabsupdatecontent-0" href="#">&laquo;</a></li>
                                       <li class="active"><a data-ajax="true" data-ajax-loading="#loading-infoAirOnCate-today" data-ajax-mode="replace" data-ajax-update="#tabsupdatecontent-0" href="#">1</a></li>
                                       <li><a data-ajax="true" data-ajax-loading="#loading-infoAirOnCate-today" data-ajax-mode="replace" data-ajax-update="#tabsupdatecontent-0" href="#">2</a></li>
                                       <li><a data-ajax="true" data-ajax-loading="#loading-infoAirOnCate-today" data-ajax-mode="replace" data-ajax-update="#tabsupdatecontent-0" href="#">&raquo;</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
	</div>
</div>
<!--END Content - news --> 

<?php require_once('layout/footer.php'); ?>