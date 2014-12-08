<!--content -->
<?php $baseUrl=yii::app()->baseUrl;?>

<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <?php echo CHtml::image($baseUrl."/images/carousel/banner-1.jpg") ?>
            </li>
            <li>
                <?php echo CHtml::image($baseUrl."/images/carousel/banner-2.jpg") ?>
                <div class="intro">
                    <h1>Mid season sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
                </div>
            </li>
        </ul>
    </div>			
</section>
<section class="header_text">
        <?php echo 'id='.Yii::app()->session['id']; ?>
        <?php echo 'user='.Yii::app()->session['username']; ?>
        We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
        <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">													
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                        <span class="pull-right">
                            <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                        </span>
                    </h4>
                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails">												
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/1.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Ut wisi enim ad</a><br/>
                                            <a href="products.html" class="category">Commodo consequat</a>
                                            <p class="price">$17.25</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/2.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Quis nostrud exerci tation</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$32.50</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/3.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Know exactly turned</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$14.20</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/4.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">You think fast</a><br/>
                                            <a href="products.html" class="category">World once</a>
                                            <p class="price">$31.45</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails">
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/5.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Know exactly</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$22.30</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/6.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Ut wisi enim ad</a><br/>
                                            <a href="products.html" class="category">Commodo consequat</a>
                                            <p class="price">$40.25</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/7.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">You think water</a><br/>
                                            <a href="products.html" class="category">World once</a>
                                            <p class="price">$10.45</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/8.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Quis nostrud exerci</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$35.50</p>
                                        </div>
                                    </li>																																	
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>						
            </div>
            <br/>
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
                        <span class="pull-right">
                                <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                        </span>
                    </h4>
                    <div id="myCarousel-2" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails">												
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/1.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Ut wisi enim ad</a><br/>
                                            <a href="products.html" class="category">Commodo consequat</a>
                                            <p class="price">$17.25</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/2.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Quis nostrud exerci tation</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$32.50</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                                <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/3.jpg" alt="" /></a></p>
                                                <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Know exactly turned</a><br/>
                                                <a href="products.html" class="category">Quis nostrud</a>
                                                <p class="price">$14.20</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                                <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/4.jpg" alt="" /></a></p>
                                                <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">You think fast</a><br/>
                                                <a href="products.html" class="category">World once</a>
                                                <p class="price">$31.45</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails">
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/5.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Know exactly</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$22.30</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/6.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Ut wisi enim ad</a><br/>
                                            <a href="products.html" class="category">Commodo consequat</a>
                                            <p class="price">$40.25</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/7.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">You think water</a><br/>
                                            <a href="products.html" class="category">World once</a>
                                            <p class="price">$10.45</p>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="product-box">
                                            <p><a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>"><img src="<?php echo $baseUrl; ?>./images/ladies/8.jpg" alt="" /></a></p>
                                            <a href="<?php echo Yii::app()->createUrl("site/product_detail"); ?>" class="title">Quis nostrud exerci</a><br/>
                                            <a href="products.html" class="category">Quis nostrud</a>
                                            <p class="price">$35.50</p>
                                        </div>
                                    </li>																																	
                                </ul>
                            </div>
                        </div>							
                    </div>
                </div>						
            </div>
            <div class="row feature_box">						
                <div class="span4">
                    <div class="service">
                        <div class="responsive">	
                            <img src="<?php echo $baseUrl; ?>./images/feature_img_2.png" alt="" />
                            <h4>MODERN <strong>DESIGN</strong></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
                        </div>
                    </div>
                </div>
                <div class="span4">	
                    <div class="service">
                        <div class="customize">			
                            <img src="<?php echo $baseUrl; ?>./images/feature_img_1.png" alt="" />
                            <h4>FREE <strong>SHIPPING</strong></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="service">
                        <div class="support">	
                            <img src="<?php echo $baseUrl; ?>./images/feature_img_3.png" alt="" />
                            <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                        </div>
                    </div>
                </div>	
            </div>		
        </div>				
    </div>
</section>
<section class="our_client">
    <h4 class="title"><span class="text">Manufactures</span></h4>
    <div class="row">					
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/14.png"></a>
        </div>
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/35.png"></a>
        </div>
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/1.png"></a>
        </div>
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/2.png"></a>
        </div>
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/3.png"></a>
        </div>
        <div class="span2">
                <a href="#"><img alt="" src="<?php echo $baseUrl; ?>/images/clients/4.png"></a>
        </div>
    </div>
</section>
<!--content -->