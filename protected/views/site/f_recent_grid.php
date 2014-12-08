<?php

/**
 * Description of f_recent_grid
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$baseUrl=  Yii::app()->request->baseUrl;
?>
  <!-- Site Showcase -->
  <div class="site-showcase">
    <!-- Start Page Header -->
    <div class="parallax page-header" style="background-image:url(<?php echo $baseUrl;?>/images/page-header1.jpg);">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h1>Property Grid Listing</h1>
                  </div>
             </div>
         </div>
    </div>
    <!-- End Page Header -->
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="block-heading">
                          <h4><span class="heading-icon"><i class="fa fa-th-large"></i></span>Property Grid</h4>
                          <div class="toggle-view pull-right">
                              <a href="<?php echo Yii::app()->createUrl('site/recentgrid');?>"><i class="fa fa-th-large"></i></a>
                              <a href="<?php echo Yii::app()->createUrl('site/recentlist');?>" class="active"><i class="fa fa-th-list"></i></a>
                          </div>
                      </div>
                      <?php $this->widget('zii.widgets.CListView', array(
                                //'id'=>'recentList',
                                'dataProvider'=>$dataProvider,
                                'itemView'=>'_view_recent_grid',
                                'itemsTagName'=>'ul',
                                'itemsCssClass'=>'grid-holder col-3',
                                'htmlOptions'=>array('class'=>'property-grid'),
                                'pagerCssClass' => 'xx',
                                'summaryText'=>'Result {start} - {end} of {count} results',//'Result {start} - {end} of {count} results'
                                'pager' => Array(
                                    //'id'=>'precentList',
                                    //'cssFile'=>Yii::app()->theme->baseUrl."/css/pagination.css",
                                    'htmlOptions'=>array('class'=>'pagination'),
                                    'header' => '',
                                    'prevPageLabel' => '<i class="fa fa-chevron-left"></i></a>',
                                    'nextPageLabel' => '<i class="fa fa-chevron-right"></i>',
//                                    'firstPageLabel'=>'',
//                                    'lastPageLabel'=>''
//                                    'footer'=>'End',//defalut empty
//                                    'maxButtonCount'=>4 // defalut 10    
                                    
                                      // css class         
//                                    'firstPageCssClass'=>'pager_first',//default "first"
//                                    'lastPageCssClass'=>'pager_last',//default "last"
//                                    'previousPageCssClass'=>'pager_previous',//default "previours"
//                                    'nextPageCssClass'=>'pager_next',//default "next"
//                                    'internalPageCssClass'=>'pager_li',//default "page"
                                    'selectedPageCssClass'=>'active',//default "selected"
//                                    'hiddenPageCssClass'=>'pager_hidden_li'//default "hidden"                
                                ),
                        )); ?>

                  </div>  
              </div>
          </div>
      </div>
  </div>