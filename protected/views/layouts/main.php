<?php
$baseUrl=  Yii::app()->request->baseUrl;
//@prasuton multi language
$session=new CHttpSession;
$session->open();

$http = new CHttpRequest;
Yii::app()->user->returnUrl=$http->getUrl();
?>
<?php
$this->widget('ext.Hzl.toastr.HzlToastr', array(
                'flashMessagesOnly' => true, //default to false.  True will fetch setFlashes data
                'options' => array(
                    'timeOut' => 15000,
                ),
            ));
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>The Room</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS  ================================================== -->

<!--Favicon--> 
<link rel="shortcut icon" href="<?php echo $baseUrl; ?>/images/favicon.ico" />
        
<link href="<?php echo $baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseUrl; ?>/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseUrl; ?>/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseUrl; ?>/plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link class="alt" href="<?php echo $baseUrl; ?>/colors/color1.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseUrl; ?>/style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS  ================================================== -->
<script src="<?php echo $baseUrl; ?>/js/modernizr.js"></script> 
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="top-header hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            
            <ul class="horiz-nav pull-left">
              <?php if(Yii::app()->user->isGuest): ?>
                <li><a href="<?php echo Yii::app()->createUrl('site/login');?>"><i class="fa fa-user"></i> Login</a></li>
              <?php else : ?>
                <li><a href="<?php echo Yii::app()->createUrl('site/logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
              <?php endif; ?>
                
                <li><?php echo CHtml::link('thai',array('setlanguage','lang'=>'th'))?></li>
                <li><?php echo CHtml::link('eng',array('setlanguage','lang'=>'en'))?></li>                
<!--              <li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-check-circle"></i> Switch Language <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php //echo CHtml::link('thai',array('setlanguage','lang'=>'th'))?></li>
                  <li><?php //echo CHtml::link('eng',array('setlanguage','lang'=>'en'))?></li>
                </ul>
              </li>-->
              
            </ul>
          </div>
          <div class="col-md-8 col-sm-6">
            <ul class="horiz-nav pull-right">
                  <li><a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-8 col-xs-8">
              <h1 class="logo"> <a href="<?php echo Yii::app()->createUrl('site/index');?>"><img src="<?php echo $baseUrl;?>/images/logo.png" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-4 col-xs-4">
              <div class="contact-info-blocks hidden-sm hidden-xs">
                  <div>
                      <i class="fa fa-phone"></i> ติดต่อโฆษณา
                    <span>089 4189 225</span>
                </div>
                  <div>
                      <i class="fa fa-envelope"></i> Email Us
                    <span>prasuton_123@hotmail.com</span>
                </div>
                  <div>
                      <i class="fa fa-clock-o"></i> เวลาทำการ
                    <span>17:00 to 23:00</span>
                </div>
             </div>
              <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
                <?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array(
                        'label' => '<i class="fa fa-envelope"></i><span class="username">'.Yii::t('f_navbar','home').'</span>',
                        'url' => Yii::app()->createUrl('site/index'),
                        'linkOptions'=> array(
                            'class' => '',
                            'data-toggle' => '',
                        ),
                        'itemOptions' => array('class'=>''),
                        'items' => array(
                            array(
                                'label' => '<i class="icon-user"></i> My Profile',
                                'url' => '#'
                            ),
                            array(
                                'label' => '<i class="icon-calendar"></i> My Calendar',
                                'url' => '#',
                            ),
                        )
                    ),
                    array(
                        'label'=>  Yii::t('f_navbar','about'),
                        'url'=>'#'
                    ),
                    array(
                        'label'=>  Yii::t('f_navbar','contact'),
                        'url'=>'#'
                    )
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'sf-menu',
                ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown',
                )
            ));?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header -->
  <?php echo $content;?>
  <!-- Start Site Footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Latest News</h3>
                  <ul>
                      <li>
                          <a href="blog-post.html">โปรแกรมบริหารจัดการหอพักออนไลน์</a>
                          <span class="meta-data">1 March, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.html">ใช้งานง่ายถูกต้องรวดเร็ว</a>
                          <span class="meta-data">28 February, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.html">ผู้ประกอบการสามารถให้งานได้ทันทีโดยไม่เสียค่าใช้จ่าย</a>
                          <span class="meta-data">26 February, 2014</span>
                      </li>
                  </ul>
              </div>
           <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Useful Links</h3>
               <ul>
                <li><a href="submit.html">Add your listing</a></li>
                <li><a href="login.html">Become an agent</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="shortcodes.html">Theme features</a></li>
               </ul>
           </div>
           <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Useful Links</h3>
               <ul>
                <li><a href="submit.html">Add your listing</a></li>
                <li><a href="login.html">Become an agent</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="shortcodes.html">Theme features</a></li>
               </ul>
           </div>
<!--           <div class="col-md-3 col-sm-6 footer-widget widget">
              <h3 class="widgettitle">Twitter Updates</h3>
                  <ul class="twitter-widget"></ul>
           </div>-->
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Our Newsletter</h3>
               <p>TheRoom คือโปรแกรมบริหารจัดการหอพักโดยไม่แสวงหาผลกำไลผู้กระกอบการสามารถสมัครสมาชิกและใช้งานระบบได้ทันที</p>
               <form>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
                  <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Subscribe">
               </form>
           </div>
       </div>
   </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2014 RealSpaces. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
             <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
             <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a>
             <a href="#"><i class="fa fa-rss"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Site Footer -->
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>

<!--Jquery Library Call  -->
<!--<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>-->
<!--<script src="<?php echo $baseUrl; ?>/js/jquery-2.0.0.min.js"></script>  -->
<!--PrettyPhoto Plugin  -->
<script src="<?php echo $baseUrl; ?>/plugins/prettyphoto/js/prettyphoto.js"></script>  
<!--Owl Carousel  -->
<script src="<?php echo $baseUrl; ?>/plugins/owl-carousel/js/owl.carousel.min.js"></script>  
<!--FlexSlider  -->
<script src="<?php echo $baseUrl; ?>/plugins/flexslider/js/jquery.flexslider.js"></script>  
<!--Plugins-->
<script src="<?php echo $baseUrl; ?>/js/helper-plugins.js"></script>    
<!--UI-->
<script src="<?php echo $baseUrl; ?>/js/bootstrap.js"></script>    
<!--Waypoints-->
<script src="<?php echo $baseUrl; ?>/js/waypoints.js"></script>  
<!--All Scripts -->
<script src="<?php echo $baseUrl; ?>/js/init.js"></script>   
<script src="<?php echo $baseUrl; ?>/style-switcher/js/jquery_cookie.js"></script> 
<script src="<?php echo $baseUrl; ?>/style-switcher/js/script.js"></script> 

<!-- Style Switcher Start -->
<div class="styleswitcher visible-lg visible-md">
  <div class="arrow-box"><a class="switch-button"><span class="fa fa-cogs fa-lg"></span></a> </div>
  <h4>Color Skins</h4>
  <ul class="color-scheme">
    <li><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color1.css" class="color1" title="color1"></a></li>
    <li><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color2.css" class="color2" title="color2"></a></li>
    <li><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color3.css" class="color3" title="color3"></a></li>
    <li><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color4.css" class="color4" title="color4"></a></li>
    <li><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color5.css" class="color5" title="color5"></a></li>
    <li class="nomargin"><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color6.css" class="color6" title="color6"></a></li>
    <li class="nomargin"><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color7.css" class="color7" title="color7"></a></li>
    <li class="nomargin"><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color8.css" class="color8" title="color8"></a></li>
    <li class="nomargin"><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color9.css" class="color9" title="color9"></a></li>
    <li class="nomargin"><a href="#" data-rel="<?php echo $baseUrl; ?>/colors/color10.css" class="color10" title="color10"></a></li>
  </ul>
  <h4>Layout</h4>
  <ul class="layouts">
    <li class="wide-layout"><a href="#" title="Wide">Wide</a></li>
    <li class="boxed-layout"><a href="#" title="Boxed">Boxed</a></li>
  </ul>
  <h4>Background Pattern</h4>
  <ul class="background-selector">
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt1.png" data-nr="0" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt2.png" data-nr="1" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt3.png" data-nr="2" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt4.png" data-nr="3" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt5.png" data-nr="4" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt6.png" data-nr="5" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt7.png" data-nr="6" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt8.png" data-nr="7" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt9.png" data-nr="8" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt10.png" data-nr="9" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt11.jpg" data-nr="10" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt12.jpg" data-nr="11" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt13.jpg" data-nr="12" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt14.jpg" data-nr="13" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/patterns/pt15.jpg" data-nr="14" width="20" height="20"></li>
  </ul>
  <small>*only for boxed layout</small>
  <h4>Background Image</h4>
  <ul class="background-selector1">
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/images/img1-thumb.jpg" data-nr="0" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/images/img2-thumb.jpg" data-nr="1" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/images/img3-thumb.jpg" data-nr="2" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/images/img4-thumb.jpg" data-nr="3" width="20" height="20"></li>
    <li><img alt="" src="<?php echo $baseUrl; ?>/style-switcher/backgrounds/images/img5-thumb.jpg" data-nr="4" width="20" height="20"></li>
  </ul>
  <small>*only for boxed layout</small> </div>
</body>
</html>