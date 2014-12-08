<?php
$baseUrl=  Yii::app()->request->baseUrl;
/**
 * Description of f_index
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->clientScript->scriptMap=array(
//    'jquery.js'=>FALSE,
//    'jquery.ba-bbq.js'=>FALSE,
//    'jquery-2.0.0.min.js'=>FALSE
);
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
            
            <?php //echo $_POST['propery type']; 
            $this->renderPartial('_search_index',array(
//                'select_btype'=>$select_btype,
//                'list'=>$list
                
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
                  <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>รายการล่าสุด</h4>
                  <a href="<?php echo Yii::app()->createUrl('site/recentlist');?>" class="btn btn-primary btn-sm pull-right">ดูเพิ่มเติม <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <?php
//                                $this->widget('CStarRating',array(
//                                            'name'=>'rating_2',
//                                            'value'=>'3',
//                                            'readOnly'=>true,
//                                            ));
                                ?>
              <?php

                $this->widget('zii.widgets.CListView',array(
                    'id'=>'index_recent',
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view_index',
                    'itemsTagName'=>'ul',
                    'itemsCssClass'=>'',
                    'htmlOptions'=>array('class'=>''),
                    'summaryText'=>FALSE,
                    'enablePagination'=>FALSE,
                ));
                
//                $this->widget('zii.widgets.CListView',array(
//                    'id'=>'index_recent',
//                    'dataProvider'=>$dataProvider,
//                    'itemView'=>'_view_index',
//                    'itemsTagName'=>'ul',
//                    'itemsCssClass'=>'owl-carousel owl-alt-controls',
//                    'htmlOptions'=>array('class'=>''),
//                    'summaryText'=>FALSE,
//                    'enablePagination'=>FALSE,
//                ));
              ?>
          </div>
        </div>
      </div>
      <div id="featured-properties">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-heading">
                <h4><span class="heading-icon"><i class="fa fa-star"></i></span>หอพักหรู</h4>
              </div>
            </div>
          </div>
          <div class="row">
              <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="no">
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                      <img src="<?php echo $baseUrl;?>/images/property1.jpg" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                      <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">116 Waverly Place</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.html" class="property-featured-image">
                      <img src="<?php echo $baseUrl;?>/images/property8.jpg" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">232 East 63rd Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>250000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property7.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">55 Warren Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>300000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property5.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">459 West Broadway</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property6.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">70 Greene Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>500000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property4.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">115 Allen Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>5000 Monthly</span></div>
                      </div>
                  </li>
                    <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                      <img src="<?php echo $baseUrl;?>/images/property1.jpg" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                      <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">116 Waverly Place</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.html" class="property-featured-image">
                      <img src="<?php echo $baseUrl;?>/images/property8.jpg" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">232 East 63rd Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>250000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property7.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">55 Warren Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>300000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property5.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">459 West Broadway</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property6.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">70 Greene Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>500000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.html" class="property-featured-image">
                          <img src="<?php echo $baseUrl;?>/images/property4.jpg" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.html">115 Allen Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>5000 Monthly</span></div>
                      </div>
                  </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="padding-tb45 bottom-blocks">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4 features-list column">
                      <h3>Theme features</h3>
                    <ul>
                      <li>
                              <div class="icon"><i class="fa fa-umbrella"></i></div>
                           <div class="text">
                                  <h4>Lots of possibilities</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-list"></i></div>
                           <div class="text">
                                  <h4>Property list view</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-search"></i></div>
                           <div class="text">
                                  <h4>Advance Search Options</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-users"></i></div>
                           <div class="text">
                                  <h4>Agents Profile</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                    </ul> 
                </div>
                  <div class="col-md-4 col-sm-4 popular-agent column">
                      <h3>Popular Agent</h3>
                    <a href="agent-detail.html"><img src="<?php echo $baseUrl;?>/images/agent1.jpg" alt="" class="img-thumbnail"></a> 
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <h4><a href="agent-detail.html">Brooklyn Coyle</a></h4>
                              <a href="agent-detail.html" class="btn btn-sm btn-primary">more details</a>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                              <ul class="contact-info">
                                  <li><i class="fa fa-phone"></i> +87 6543 210</li>
                               <li><i class="fa fa-envelope"></i> brook@gmail.com</li>
                           </ul>
                       </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-4 latest-testimonials column">
                      <h3>Client Testimonials</h3>
                    <ul class="testimonials">
                      <li>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                          <img src="<?php echo $baseUrl;?>/images/client1.jpg" alt="Happy Client" class="testimonial-sender">
                              <cite>Mellisa - <strong>My company</strong>
                              <br><a href="#">www.companyurl.com</a>
                           </cite>
                        </li>
                    </ul> 
                </div>
             </div>
         </div>
      </div>
     	<div class="container">
         <div class="block-heading">
            <h4><span class="heading-icon"><i class="fa fa-users"></i></span>โฆษณา</h4>
            <a href="about.html" class="btn btn-primary btn-sm pull-right">โฆษณา ทั้งหมด <i class="fa fa-long-arrow-right"></i></a>
         </div>
         <div class="row">
            <ul class="owl-carousel" id="clients-slider" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="2" data-items-tablet="4">
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-5.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="<?php echo $baseUrl;?>/images/partner-5.png" alt=""></a> </li>
            </ul>
         </div>
      </div>
    </div>
  </div>