<?php

/**
 * Description of cor_user
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->getClientScript();?>
<?php //<!--page specific plugin styles-->?>
<?php //<!--inline styles related to this page-->?>
<div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">Home</a>

                                <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                </span>
                        </li>

                        <li>
                                <a href="#">More Pages</a>

                                <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                </span>
                        </li>
                        <li class="active">Invoice</li>
                </ul><!--.breadcrumb-->

                <div class="nav-search" id="nav-search">
                        <form class="form-search" />
                                <span class="input-icon">
                                        <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                                        <i class="icon-search nav-search-icon"></i>
                                </span>
                        </form>
                </div><!--#nav-search-->
        </div>

        <div class="page-content">
                <div class="row-fluid">
                        <div class="span12">
                                <!--PAGE CONTENT BEGINS-->

                                <div class="space-6"></div>

                                <div class="row-fluid">
                                        <div class="span10 offset1">
                                                <div class="widget-box transparent invoice-box">
                                                        <div class="widget-header widget-header-large">
                                                                <h3 class="grey lighter pull-left position-relative">
                                                                        <i class="icon-leaf green"></i>
                                                                        รายงานระบบ
                                                                </h3>

                                                                <div class="widget-toolbar no-border invoice-info">
                                                                        <span class="invoice-info-label">Date:</span>
                                                                        <span class="blue"><?php echo KDate::getThaiDate(date('Y-m-d H:i:s'));?></span>
                                                                </div>
                                                        </div>

                                                        <div class="widget-body">
                                                                <div class="widget-main padding-24">
                                                                        <div class="row-fluid">
                                                                                <div class="row-fluid">
                                                                                        <div class="span6">
                                                                                                <div class="row-fluid">
                                                                                                        <div class="span12 label label-large label-info arrowed-in arrowed-right">
                                                                                                                <b>ผู้ใช้ระบบ</b>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="row-fluid">
                                                                                                        <ul class="unstyled spaced">
                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right blue"></i>
                                                                                                                        <?php
                                                                                                                            echo CHtml::link('รายงานหอพักแยกตามนิติบุคคล',Yii::app()->createUrl('Breport/genreport',
                                                                                                                                        array('rname'=>'r_building')),
                                                                                                                                        array('target'=>'_blank'));
                                                                                                                        ?>
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right blue"></i>
                                                                                                                        Zip Code
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right blue"></i>
                                                                                                                        State, Country
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right blue"></i>
                                                                                                                        Phone:
                                                                                                                        <b class="red">111-111-111</b>
                                                                                                                </li>

                                                                                                                <li class="divider"></li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right blue"></i>
                                                                                                                        Paymant Info
                                                                                                                </li>
                                                                                                        </ul>
                                                                                                </div>
                                                                                        </div><!--/span-->

                                                                                        <div class="span6">
                                                                                                <div class="row-fluid">
                                                                                                        <div class="span12 label label-large label-success arrowed-in arrowed-right">
                                                                                                                <b>Customer Info</b>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="row-fluid">
                                                                                                        <ul class="unstyled spaced">
                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right green"></i>
                                                                                                                        Street, City
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right green"></i>
                                                                                                                        Zip Code
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right green"></i>
                                                                                                                        State, Country
                                                                                                                </li>

                                                                                                                <li class="divider"></li>

                                                                                                                <li>
                                                                                                                        <i class="icon-caret-right green"></i>
                                                                                                                        Contact Info
                                                                                                                </li>
                                                                                                        </ul>
                                                                                                </div>
                                                                                        </div><!--/span-->
                                                                                </div><!--row-->

                                                                                <div class="space"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <!--PAGE CONTENT ENDS-->
                        </div><!--/.span-->
                </div><!--/.row-fluid-->
        </div><!--/.page-content-->

        <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                </div>

                <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                                <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                                <option data-class="default" value="#438EB9" />#438EB9
                                                <option data-class="skin-1" value="#222A2D" />#222A2D
                                                <option data-class="skin-2" value="#C6487E" />#C6487E
                                                <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                                        </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                                <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div>
                                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>
                </div>
        </div><!--/#ace-settings-container-->
</div><!--/.main-content-->
<?php //<!--page specific plugin scripts--> ?>