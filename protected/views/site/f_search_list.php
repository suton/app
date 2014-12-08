<?php

/**
 * Description of f_search_list
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$baseUrl=  Yii::app()->baseUrl;
?>
  <!-- Site Showcase -->
  <div class="site-showcase">
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
      <ul class="slides">
        <li class=" parallax" style="background-image:url(<?php echo $baseUrl;?>/images/slide2.jpg);">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><strong>$</strong><span>100000</span></div>
             <a href="property-detail.html" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="<?php echo $baseUrl;?>/images/agent-thumb1.jpg" alt="" class="hero-agent-pic">
                  <a href="agent-detail.html" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
             </div>
          </div>
        </li>
        <li class="parallax" style="background-image:url(<?php echo $baseUrl;?>/images/slide1.jpg);">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><strong>$</strong><span>100000</span></div> <a href="property-detail.html" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="<?php echo $baseUrl;?>/images/agent-thumb2.jpg" alt="" class="hero-agent-pic">
                  <a href="agent-detail.html" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
              </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- End Hero Slider --> 
    <!-- Site Search Module -->
    <div class="site-search-module">
      <div class="container">
        <div class="site-search-module-inside">
            
            <?php 
            $this->renderPartial('_search_index',array(
            )); ?>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
    <div class="container">
      <div class="row">
          <div class="property-columns" id="latest-properties">
              <div class="col-md-12">
                <div class="block-heading">
                  <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>รายการค้นหา</h4>
                  <a href="<?php echo Yii::app()->createUrl('site/recentlist');?>" class="btn btn-primary btn-sm pull-right">ดูเพิ่มเติม <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
               <?php $this->widget('zii.widgets.CListView', array(
                                //'id'=>'recentList',
                                'dataProvider'=>$dataProvider,
                                'itemView'=>'_view_recent_list',
                                'itemsTagName'=>'ul',
                                'itemsCssClass'=>'',
                                'htmlOptions'=>array('class'=>'property-listing'),
                                'pagerCssClass' =>'xx',
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