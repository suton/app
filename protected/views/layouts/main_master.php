<?php 
//$baseUrl=yii::app()->theme->baseUrl;
$baseUrl=yii::app()->request->baseUrl;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--*****************************shop theme ******************************-->
        <meta charset="utf-8">
        <title>MK Apartment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- global styles -->
        <link href="<?php echo $baseUrl;?>/css/themes/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $baseUrl;?>/css/themes/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $baseUrl;?>/css/themes/css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <!-- scripts -->
        <!--<script src="<?php //echo $baseUrl;?>/js/themes/js/jquery-1.7.2.min.js"></script>--><!-- ตัวปัญหาทำให้ Rights revoke ไม่ได้ -->
        <!--<script src="<?php echo $baseUrl;?>/js/bootstrap.min.js"></script>-->				
        <script src="<?php echo $baseUrl;?>/js/themes/js/superfish.js"></script>	
        <script src="<?php echo $baseUrl;?>/js/themes/js/jquery.scrolltotop.js"></script>
        <script src="<?php echo $baseUrl;?>/js/themes/js/jquery.fancybox.js"></script>
        <!--[if lt IE 9]>			
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->

</head>
<body>
    <div id="top-bar" class="container">
        <div class="row">
            <div class="span4">
<!--                <form method="POST" class="search_form">
                    <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
                </form>-->
            </div>
            <div class="span12">
                <?php
                    $mk_code=NULL;
                    if(!empty(Yii::app()->session['id'])){
                        $apmt=  Corporation::model()->findByAttributes(array('owner_id'=>Yii::app()->session['id']));
                        $mk_code=$apmt->code;
                    }
                    $this->widget('bootstrap.widgets.TbNavbar',array(
                            'type' => null, // null or 'inverse'
                            'brand' =>"$mk_code",
                            //'brandUrl' => '#xxxxx',
                            'collapse' => true, // requires bootstrap-responsive.css
                            'fixed' => false,
                            'items' => array(
                                array(
                                    'class' => 'bootstrap.widgets.TbMenu',
                                    'items' => array(
                                        array('label'=>  Yii::t('f_navbar','home'), 'url'=>array('/site/index')),
                                        array('label'=>Yii::t('f_navbar','about'), 'url'=>array('/site/cart'),
                                            'items'=>array(
                                                array('label'=>'sub a1','url'=>array('/site/cart')
                                            )
                                        )),
                                        array('label'=>Yii::t('f_navbar','contact'), 'url'=>array('/site/checkout')),
                                    ),
                                ),
                                '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
                                array(
                                    'class' => 'bootstrap.widgets.TbMenu',
                                    'htmlOptions' => array('class' => 'pull-right'),
                                    'items' => array(
                                        array('label'=>'เลือกภาษา',
                                            'items'=>array(
                                                array('label'=>'thai','url'=>array('setlanguage','lang'=>'th')),
                                                array('label'=>'eng','url'=>array('setlanguage','lang'=>'en'))
                                            )),
                                        array('label'=>'ตั้งค่าบัญชีผู้ใช้','visible'=>Yii::app()->user->checkAccess('AdminApartmentAuth'),
                                            'items'=>array(
                                                array('label' => 'ข้อมูลหอพัก', 'url'=>array('/site/Account'),'visible'=>Yii::app()->user->checkAccess('AdminApartmentAuth')),
                                                array('label' => 'Another action', 'url' => '#','visible'=>FALSE),
                                                array('label' => 'Something else here','url' => '#'),
                                                array('label' => 'Separated link', 'url' => '#'),
                                            )),
                                        array('label' => 'Rights', 'url' => array('/rights'), 'visible' => Yii::app()->user->checkAccess('AdminApartmentAuth')),
                                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                    ),
                                ),
                            ),
                        ));
                ?>
                <?php //if(!empty(Yii::app()->session['username'])) ?>
                <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
                <?php endif?>
            </div>
        </div>
    </div>
    
    <div id="wrapper" class="container">
        <section class="navbar main-menu">
            <div class="navbar-inner main-menu">				
                <a href="<?php echo Yii::app()->createUrl("site/index");?>" class="logo pull-left">
                    <?php echo CHtml::image("images/logo.png");?>
                </a>
                <nav id="menu" class="pull-right">
                    <ul>
                        <li><a href="<?php echo Yii::app()->createUrl("site/products");?>">Woman</a>					
                            <ul>
                                <li><a href="<?php echo Yii::app()->createUrl("site/products");?>">Lacinia nibh</a></li>									
                                <li><a href="<?php echo Yii::app()->createUrl("site/products");?>">Eget molestie</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl("site/products");?>">Varius purus</a></li>									
                            </ul>
                        </li>															
                        <li><a href="./products.html">Man</a></li>			
                        <li><a href="./products.html">Sport</a>
                            <ul>									
                                <li><a href="./products.html">Gifts and Tech</a></li>
                                <li><a href="./products.html">Ties and Hats</a></li>
                                <li><a href="./products.html">Cold Weather</a></li>
                            </ul>
                        </li>							
                        <li><a href="./products.html">Hangbag</a></li>
                        <li><a href="./products.html">Best Seller</a></li>
                        <li><a href="./products.html">Top Seller</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <?php echo $content; ?>
        <section id="footer-bar">
            <div class="row">
                <div class="span3">
                    <h4>Navigation</h4>
                    <ul class="nav">
                        <li><a href="./index.html">Homepage</a></li>  
                        <li><a href="./about.html">About Us</a></li>
                        <li><a href="./contact.html">Contac Us</a></li>
                        <li><a href="./cart.html">Your Cart</a></li>
                        <li><a href="./register.html">Login</a></li>							
                    </ul>					
                </div>
                <div class="span4">
                    <h4>My Account</h4>
                    <ul class="nav">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
                <div class="span5">
                    <p class="logo"><img src="images/logo.png" class="site_logo" alt=""></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
                    <br/>
                    <span class="social_icons">
                        <a class="facebook" href="#">Facebook</a>
                        <a class="twitter" href="#">Twitter</a>
                        <a class="skype" href="#">Skype</a>
                        <a class="vimeo" href="#">Vimeo</a>
                    </span>
                </div>					
            </div>	
        </section>
        <section id="copyright">
                <span>Copyright 2013 bootstrappage template  All right reserved.</span>
        </section>
    </div>
    <script src="<?php echo $baseUrl; ?>/js/themes/js/common.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/themes/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
            $(function() {
                    $(document).ready(function() {
                            $('.flexslider').flexslider({
                                    animation: "fade",
                                    slideshowSpeed: 4000,
                                    animationSpeed: 600,
                                    controlNav: false,
                                    directionNav: true,
                                    controlsContainer: ".flex-container" // the container that holds the flexslider
                            });
                    });
            });
    </script>
</body>
</html>
