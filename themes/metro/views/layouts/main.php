<?php
$baseUrl=Yii::app()->theme->baseUrl;
//@prasuton multi language
$session=new CHttpSession;
$session->open();

$http = new CHttpRequest;
Yii::app()->user->returnUrl=$http->getUrl();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>TheRoom</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
<!--        <meta charset="utf-8" />-->
        <meta name="description" content="TheRoom,apartment,room for rent,หอพัก,ห้องพัก,โรงแรม" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        
        <!--Favicon--> 
        <link href="<?php echo $baseUrl; ?>/favicon.ico" rel="shortcut icon"/>
        
        <!--basic styles-->

        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo $baseUrl; ?>/assets/css/font-awesome.min.css" rel="stylesheet"/>

        <!--[if IE 7]>
          <link href="<?php echo $baseUrl; ?>/assets/css/font-awesome-ie7.min.css" rel="stylesheet"/>
        <![endif]-->
        
        <!--fonts-->

        <!--<link  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet"/>-->

        <!--ace styles-->

        <link href="<?php echo $baseUrl; ?>/assets/css/ace.min.css" rel="stylesheet"/>
        <link href="<?php echo $baseUrl; ?>/assets/css/ace-responsive.min.css" rel="stylesheet"/>
        <link href="<?php echo $baseUrl; ?>/assets/css/ace-skins.min.css" rel="stylesheet"/>

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/ace-ie.min.css" />
        <![endif]-->

    </head>
 <!--<ul class="nav nav-list">-->
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-home"></i>
                            The Room
                        </small>
                    </a><!--/.brand-->
                    
                    <ul class="nav ace-nav pull-right">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="icon-tasks"></i>
                                    <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:35%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:15%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:90%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See tasks with details
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    8 Notifications
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-pink icon-comment"></i>
                                                New Comments
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-mini btn-primary icon-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-info icon-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all notifications
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-envelope-alt"></i>
                                    5 Messages
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo $baseUrl;?>/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo $baseUrl;?>/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Susan:</span>
                                                Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>20 minutes ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?php echo $baseUrl;?>/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Bob:</span>
                                                Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>3:15 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="green">
                            <?php echo CHtml::link('thai',array('setlanguage','lang'=>'th'))?>
                        </li>
                        <li class="green">
                            <?php echo CHtml::link('eng',array('setlanguage','lang'=>'en'))?>
                        </li>
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo $baseUrl;?>/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>ยินดีต้องรับ,</small>
                                    <?php echo Yii::app()->user->name;?>
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('Bnavbar/settings'); ?>">
                                        <i class="icon-cog"></i>
                                        <?php echo Yii::t('b_navbar','settings');?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('Bnavbar/profile'); ?>">
                                        <i class="icon-user"></i>
                                        <?php echo Yii::t('b_navbar','profile');?>
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('site/logout')?>">
                                        <i class="icon-off"></i>
                                        <?php echo Yii::t('b_navbar','logout');?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div><!--/.navbar-->
        
        <div class="main-container container-fluid" id="m1">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success">
                            <i class="icon-signal"></i>
                        </button>

                        <button class="btn btn-small btn-info">
                            <i class="icon-pencil"></i>
                        </button>

                        <button class="btn btn-small btn-warning">
                            <i class="icon-group"></i>
                        </button>

                        <button class="btn btn-small btn-danger">
                            <i class="icon-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!--#sidebar-shortcuts-->
               <?php
                $this->widget('zii.widgets.CMenu', array(
                    'encodeLabel' => false,
                    'htmlOptions' => array('class' => 'nav nav-list'),
                    'items' => array(
                        array(
                            'label' => '<i class="icon-dashboard"></i><span class="menu-text">'.Yii::t('b_navbar','dashboard').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='dashboard',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','dashboard'),'url'=>array('dashboard/index')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','reservation'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','reserveInfo'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','covenant'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','termination'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','expense'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','bill'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','payForRoom'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','checkout'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','overdue'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-list "></i><span class="menu-text">'.Yii::t('b_navbar','finance').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='dashboard ',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','revenuesSum'),'url'=>array('Dashboard/index')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','feeSum'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','receivablesManagement'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','bailManagement'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','badDebt'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-home "></i><span class="menu-text">'.Yii::t('b_navbar','trader').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='btrader',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','traderInfo'),'url'=>array('Btrader/corporate')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','supplier'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','propertyManagement'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','userManagement'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','roomType'),'url'=>array('Btrader/roomtype')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','userManual'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-group "></i><span class="menu-text">'.Yii::t('b_navbar','customers').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='forms ',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','tenant'),'url'=>array('Forms/form')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','jointTenants'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','calendarInOut'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-coffee "></i><span class="menu-text">'.Yii::t('b_navbar','personalService').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='dashboard ',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','service'),'url'=>array('Dashboard/index')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','keyCard'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','carRegis'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-heart-empty "></i><span class="menu-text">'.Yii::t('b_navbar','maintenance').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='dashboard ',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                //array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','repair'),'url'=>array('dashboard/index')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','appeal'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','message'),'url'=>'#'),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-file-text"></i><span class="menu-text">'.Yii::t('b_navbar','report').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='breport',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                //array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','CorUser'),'url'=>array('dashboard/index')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','CorUser'),'url'=>array('Breport/coruser')),
                                //array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','traderInfo'),'url'=>array('Btrader/corporate')),
                            )
                        ),
                        array(
                            'label' => '<i class="icon-book"></i><span class="menu-text">'.Yii::t('b_navbar','form').'</span><b class="arrow icon-angle-down"></b>',
                            'url' =>'#',
                            'submenuOptions'=>array('class'=>'submenu'),
                            'linkOptions' => array('class' => 'dropdown-toggle'),
                            'active'=>$this->id=='forms ',
                            'itemOptions'=>array('class'=>'open'),
                            'items'=>array(
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_entry'),'url'=>array('Forms/form')),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_alert'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_jointTenants'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_service'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_move'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_law'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_water'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_electric'),'url'=>'#'),
                                array('label'=>'<i class="icon-double-angle-right"></i>'.Yii::t('b_navbar','f_edit'),'url'=>'#'),
                            )
                        ),
                    ),
                ));
                ?>
                

                <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left"></i>
                </div>
            </div>

            <?php echo $content; ?>

        </div><!--/.main-container-->
        
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>

        <!--basic scripts-->

        <!--[if !IE]>-->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <!--<script src="<?php echo $baseUrl;?>/assets/js/jquery-2.0.3.min.js" type="text/javascript"></script>-->
        <!--<![endif]-->

        <!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <![endif]-->

        <!--[if !IE]>-->
        <script type="text/javascript">
                window.jQuery || document.write("<script src='<?php echo $baseUrl; ?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>
        <!--<![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo $baseUrl; ?>/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

        <script type="text/javascript">
                if("ontouchend" in document) document.write("<script src='<?php echo $baseUrl;?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        
        <script src="<?php echo $baseUrl;?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!--ace scripts-->

        <script src="<?php echo $baseUrl; ?>/assets/js/ace-elements.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/ace.min.js" type="text/javascript"></script>
        
    </body>
</html>
