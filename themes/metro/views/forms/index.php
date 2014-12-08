<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/chosen.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/datepicker.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/bootstrap-timepicker.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/daterangepicker.css'); ?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/colorpicker.css'); ?>
<?php
// result to: <!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
//$cs->registerScriptFile('/js/html5.js', CClientScript::POS_HEAD, array('media' => 'lt IE 9'));
// result to: <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="bootstrap/css/ie.css" /><![endif]-->
//$cs->registerCssFile('/css/ie.css', 'lte IE 6');
?>
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
                                        <a href="#">Forms</a>

                                        <span class="divider">
                                                <i class="icon-angle-right arrow-icon"></i>
                                        </span>
                                </li>
                                <li class="active">Form Elements</li>
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
                        <div class="page-header position-relative">
                                <h1>
                                        Form Elements
                                        <small>
                                                <i class="icon-double-angle-right"></i>
                                                Common form elements and layouts
                                        </small>
                                </h1>
                        </div><!--/.page-header-->

                        <div class="row-fluid">
                                <div class="span12">
                                        <!--PAGE CONTENT BEGINS-->

                                        <form class="form-horizontal" />
                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-1">Text Field</label>

                                                        <div class="controls">
                                                                <input type="text" id="form-field-1" placeholder="Username" />
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-2">Password Field</label>

                                                        <div class="controls">
                                                                <input type="password" id="form-field-2" placeholder="Password" />
                                                                <span class="help-inline">Inline help text</span>
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-input-readonly">Readonly field</label>

                                                        <div class="controls">
                                                                <input readonly="" type="text" id="form-input-readonly" value="This text field is readonly!" />
                                                                &nbsp; &nbsp;
                                                                <input type="checkbox" id="id-disable-check" />
                                                                <label class="lbl" for="id-disable-check"> Disable it!</label>
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-4">Relative Sizing</label>

                                                        <div class="controls">
                                                                <input class="input-mini" type="text" id="form-field-4" placeholder=".input-mini" />
                                                                <div class="help-block" id="input-size-slider"></div>
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-5">Grid Sizing</label>

                                                        <div class="controls">
                                                                <input class="span1" type="text" id="form-field-5" placeholder=".span1" />
                                                                <input class="span11" type="text" placeholder=".span11" />
                                                                <div class="help-block" id="input-span-slider"></div>
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label">Input with Icon</label>

                                                        <div class="controls">
                                                                <span class="input-icon">
                                                                        <input type="text" id="form-field-icon-1" />
                                                                        <i class="icon-leaf"></i>
                                                                </span>

                                                                <span class="input-icon input-icon-right">
                                                                        <input type="text" id="form-field-icon-2" />
                                                                        <i class="icon-leaf"></i>
                                                                </span>
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-6">Tooltip and help button</label>

                                                        <div class="controls">
                                                                <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
                                                                <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
                                                        </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="control-group">
                                                        <label class="control-label" for="form-field-tags">Tag input</label>

                                                        <div class="controls">
                                                                <input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
                                                        </div>
                                                </div>

                                                <div class="form-actions">
                                                        <button class="btn btn-info" type="button">
                                                                <i class="icon-ok bigger-110"></i>
                                                                Submit
                                                        </button>

                                                        &nbsp; &nbsp; &nbsp;
                                                        <button class="btn" type="reset">
                                                                <i class="icon-undo bigger-110"></i>
                                                                Reset
                                                        </button>
                                                </div>

                                                <div class="hr"></div>

                                                <div class="row-fluid">
                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Text Area</h4>

                                                                                <span class="widget-toolbar">
                                                                                        <a href="#" data-action="collapse">
                                                                                                <i class="icon-chevron-up"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="close">
                                                                                                <i class="icon-remove"></i>
                                                                                        </a>
                                                                                </span>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-8">Default</label>

                                                                                                <textarea class="span12" id="form-field-8" placeholder="Default Text"></textarea>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-9">With Character Limit</label>

                                                                                                <textarea class="span12 limited" id="form-field-9" data-maxlength="50"></textarea>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-11">Autosize</label>

                                                                                                <textarea id="form-field-11" class="autosize-transition span12"></textarea>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div><!--/span-->

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Masked Input</h4>

                                                                                <span class="widget-toolbar">
                                                                                        <a href="#" data-action="settings">
                                                                                                <i class="icon-cog"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="reload">
                                                                                                <i class="icon-refresh"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="collapse">
                                                                                                <i class="icon-chevron-up"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="close">
                                                                                                <i class="icon-remove"></i>
                                                                                        </a>
                                                                                </span>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-mask-1">
                                                                                                        Date
                                                                                                        <small class="text-success">99/99/9999</small>
                                                                                                </label>

                                                                                                <div class="input-append">
                                                                                                        <input class="input-small input-mask-date" type="text" id="form-field-mask-1" />
                                                                                                        <span class="btn btn-small">
                                                                                                                <i class="icon-calendar bigger-110"></i>
                                                                                                                Go!
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-mask-2">
                                                                                                        Phone
                                                                                                        <small class="text-warning">(999) 999-9999</small>
                                                                                                </label>

                                                                                                <div class="input-prepend">
                                                                                                        <span class="add-on">
                                                                                                                <i class="icon-phone"></i>
                                                                                                        </span>

                                                                                                        <input class="input-medium input-mask-phone" type="text" id="form-field-mask-2" />
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-mask-3">
                                                                                                        Product Key
                                                                                                        <small class="text-error">a*-999-a999</small>
                                                                                                </label>

                                                                                                <div class="input-prepend">
                                                                                                        <span class="add-on">
                                                                                                                <i class="icon-key"></i>
                                                                                                        </span>

                                                                                                        <input class="input-medium input-mask-product" type="text" id="form-field-mask-3" />
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-mask-4">
                                                                                                        Eye Script
                                                                                                        <small class="text-info">~9.99 ~9.99 999</small>
                                                                                                </label>

                                                                                                <div>
                                                                                                        <input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div><!--/span-->

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Select Box</h4>

                                                                                <span class="widget-toolbar">
                                                                                        <a href="#" data-action="settings">
                                                                                                <i class="icon-cog"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="reload">
                                                                                                <i class="icon-refresh"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="collapse">
                                                                                                <i class="icon-chevron-up"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="close">
                                                                                                <i class="icon-remove"></i>
                                                                                        </a>
                                                                                </span>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-select-1">Default</label>

                                                                                                <select id="form-field-select-1">
                                                                                                        <option value="" />
                                                                                                        <option value="AL" />Alabama
                                                                                                        <option value="AK" />Alaska
                                                                                                        <option value="AZ" />Arizona
                                                                                                        <option value="AR" />Arkansas
                                                                                                        <option value="CA" />California
                                                                                                        <option value="CO" />Colorado
                                                                                                        <option value="CT" />Connecticut
                                                                                                        <option value="DE" />Delaware
                                                                                                        <option value="FL" />Florida
                                                                                                        <option value="GA" />Georgia
                                                                                                        <option value="HI" />Hawaii
                                                                                                        <option value="ID" />Idaho
                                                                                                        <option value="IL" />Illinois
                                                                                                        <option value="IN" />Indiana
                                                                                                        <option value="IA" />Iowa
                                                                                                        <option value="KS" />Kansas
                                                                                                        <option value="KY" />Kentucky
                                                                                                        <option value="LA" />Louisiana
                                                                                                        <option value="ME" />Maine
                                                                                                        <option value="MD" />Maryland
                                                                                                        <option value="MA" />Massachusetts
                                                                                                        <option value="MI" />Michigan
                                                                                                        <option value="MN" />Minnesota
                                                                                                        <option value="MS" />Mississippi
                                                                                                        <option value="MO" />Missouri
                                                                                                        <option value="MT" />Montana
                                                                                                        <option value="NE" />Nebraska
                                                                                                        <option value="NV" />Nevada
                                                                                                        <option value="NH" />New Hampshire
                                                                                                        <option value="NJ" />New Jersey
                                                                                                        <option value="NM" />New Mexico
                                                                                                        <option value="NY" />New York
                                                                                                        <option value="NC" />North Carolina
                                                                                                        <option value="ND" />North Dakota
                                                                                                        <option value="OH" />Ohio
                                                                                                        <option value="OK" />Oklahoma
                                                                                                        <option value="OR" />Oregon
                                                                                                        <option value="PA" />Pennsylvania
                                                                                                        <option value="RI" />Rhode Island
                                                                                                        <option value="SC" />South Carolina
                                                                                                        <option value="SD" />South Dakota
                                                                                                        <option value="TN" />Tennessee
                                                                                                        <option value="TX" />Texas
                                                                                                        <option value="UT" />Utah
                                                                                                        <option value="VT" />Vermont
                                                                                                        <option value="VA" />Virginia
                                                                                                        <option value="WA" />Washington
                                                                                                        <option value="WV" />West Virginia
                                                                                                        <option value="WI" />Wisconsin
                                                                                                        <option value="WY" />Wyoming
                                                                                                </select>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-select-2">Multiple</label>

                                                                                                <select id="form-field-select-2" multiple="multiple">
                                                                                                        <option value="AL" />Alabama
                                                                                                        <option value="AK" />Alaska
                                                                                                        <option value="AZ" />Arizona
                                                                                                        <option value="AR" />Arkansas
                                                                                                        <option value="CA" />California
                                                                                                        <option value="CO" />Colorado
                                                                                                        <option value="CT" />Connecticut
                                                                                                        <option value="DE" />Delaware
                                                                                                        <option value="FL" />Florida
                                                                                                        <option value="GA" />Georgia
                                                                                                        <option value="HI" />Hawaii
                                                                                                        <option value="ID" />Idaho
                                                                                                        <option value="IL" />Illinois
                                                                                                        <option value="IN" />Indiana
                                                                                                        <option value="IA" />Iowa
                                                                                                        <option value="KS" />Kansas
                                                                                                        <option value="KY" />Kentucky
                                                                                                        <option value="LA" />Louisiana
                                                                                                        <option value="ME" />Maine
                                                                                                        <option value="MD" />Maryland
                                                                                                        <option value="MA" />Massachusetts
                                                                                                        <option value="MI" />Michigan
                                                                                                        <option value="MN" />Minnesota
                                                                                                        <option value="MS" />Mississippi
                                                                                                        <option value="MO" />Missouri
                                                                                                        <option value="MT" />Montana
                                                                                                        <option value="NE" />Nebraska
                                                                                                        <option value="NV" />Nevada
                                                                                                        <option value="NH" />New Hampshire
                                                                                                        <option value="NJ" />New Jersey
                                                                                                        <option value="NM" />New Mexico
                                                                                                        <option value="NY" />New York
                                                                                                        <option value="NC" />North Carolina
                                                                                                        <option value="ND" />North Dakota
                                                                                                        <option value="OH" />Ohio
                                                                                                        <option value="OK" />Oklahoma
                                                                                                        <option value="OR" />Oregon
                                                                                                        <option value="PA" />Pennsylvania
                                                                                                        <option value="RI" />Rhode Island
                                                                                                        <option value="SC" />South Carolina
                                                                                                        <option value="SD" />South Dakota
                                                                                                        <option value="TN" />Tennessee
                                                                                                        <option value="TX" />Texas
                                                                                                        <option value="UT" />Utah
                                                                                                        <option value="VT" />Vermont
                                                                                                        <option value="VA" />Virginia
                                                                                                        <option value="WA" />Washington
                                                                                                        <option value="WV" />West Virginia
                                                                                                        <option value="WI" />Wisconsin
                                                                                                        <option value="WY" />Wyoming
                                                                                                </select>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-select-3">Chosen</label>

                                                                                                <select class="chzn-select" id="form-field-select-3" data-placeholder="Choose a Country...">
                                                                                                        <option value="" />
                                                                                                        <option value="AL" />Alabama
                                                                                                        <option value="AK" />Alaska
                                                                                                        <option value="AZ" />Arizona
                                                                                                        <option value="AR" />Arkansas
                                                                                                        <option value="CA" />California
                                                                                                        <option value="CO" />Colorado
                                                                                                        <option value="CT" />Connecticut
                                                                                                        <option value="DE" />Delaware
                                                                                                        <option value="FL" />Florida
                                                                                                        <option value="GA" />Georgia
                                                                                                        <option value="HI" />Hawaii
                                                                                                        <option value="ID" />Idaho
                                                                                                        <option value="IL" />Illinois
                                                                                                        <option value="IN" />Indiana
                                                                                                        <option value="IA" />Iowa
                                                                                                        <option value="KS" />Kansas
                                                                                                        <option value="KY" />Kentucky
                                                                                                        <option value="LA" />Louisiana
                                                                                                        <option value="ME" />Maine
                                                                                                        <option value="MD" />Maryland
                                                                                                        <option value="MA" />Massachusetts
                                                                                                        <option value="MI" />Michigan
                                                                                                        <option value="MN" />Minnesota
                                                                                                        <option value="MS" />Mississippi
                                                                                                        <option value="MO" />Missouri
                                                                                                        <option value="MT" />Montana
                                                                                                        <option value="NE" />Nebraska
                                                                                                        <option value="NV" />Nevada
                                                                                                        <option value="NH" />New Hampshire
                                                                                                        <option value="NJ" />New Jersey
                                                                                                        <option value="NM" />New Mexico
                                                                                                        <option value="NY" />New York
                                                                                                        <option value="NC" />North Carolina
                                                                                                        <option value="ND" />North Dakota
                                                                                                        <option value="OH" />Ohio
                                                                                                        <option value="OK" />Oklahoma
                                                                                                        <option value="OR" />Oregon
                                                                                                        <option value="PA" />Pennsylvania
                                                                                                        <option value="RI" />Rhode Island
                                                                                                        <option value="SC" />South Carolina
                                                                                                        <option value="SD" />South Dakota
                                                                                                        <option value="TN" />Tennessee
                                                                                                        <option value="TX" />Texas
                                                                                                        <option value="UT" />Utah
                                                                                                        <option value="VT" />Vermont
                                                                                                        <option value="VA" />Virginia
                                                                                                        <option value="WA" />Washington
                                                                                                        <option value="WV" />West Virginia
                                                                                                        <option value="WI" />Wisconsin
                                                                                                        <option value="WY" />Wyoming
                                                                                                </select>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="form-field-select-4">Chosen Multiple</label>

                                                                                                <select multiple="" class="chzn-select" id="form-field-select-4" data-placeholder="Choose a Country...">
                                                                                                        <option value="" />
                                                                                                        <option value="AL" />Alabama
                                                                                                        <option value="AK" />Alaska
                                                                                                        <option value="AZ" />Arizona
                                                                                                        <option value="AR" />Arkansas
                                                                                                        <option value="CA" />California
                                                                                                        <option value="CO" />Colorado
                                                                                                        <option value="CT" />Connecticut
                                                                                                        <option value="DE" />Delaware
                                                                                                        <option value="FL" />Florida
                                                                                                        <option value="GA" />Georgia
                                                                                                        <option value="HI" />Hawaii
                                                                                                        <option value="ID" />Idaho
                                                                                                        <option value="IL" />Illinois
                                                                                                        <option value="IN" />Indiana
                                                                                                        <option value="IA" />Iowa
                                                                                                        <option value="KS" />Kansas
                                                                                                        <option value="KY" />Kentucky
                                                                                                        <option value="LA" />Louisiana
                                                                                                        <option value="ME" />Maine
                                                                                                        <option value="MD" />Maryland
                                                                                                        <option value="MA" />Massachusetts
                                                                                                        <option value="MI" />Michigan
                                                                                                        <option value="MN" />Minnesota
                                                                                                        <option value="MS" />Mississippi
                                                                                                        <option value="MO" />Missouri
                                                                                                        <option value="MT" />Montana
                                                                                                        <option value="NE" />Nebraska
                                                                                                        <option value="NV" />Nevada
                                                                                                        <option value="NH" />New Hampshire
                                                                                                        <option value="NJ" />New Jersey
                                                                                                        <option value="NM" />New Mexico
                                                                                                        <option value="NY" />New York
                                                                                                        <option value="NC" />North Carolina
                                                                                                        <option value="ND" />North Dakota
                                                                                                        <option value="OH" />Ohio
                                                                                                        <option value="OK" />Oklahoma
                                                                                                        <option value="OR" />Oregon
                                                                                                        <option value="PA" />Pennsylvania
                                                                                                        <option value="RI" />Rhode Island
                                                                                                        <option value="SC" />South Carolina
                                                                                                        <option value="SD" />South Dakota
                                                                                                        <option value="TN" />Tennessee
                                                                                                        <option value="TX" />Texas
                                                                                                        <option value="UT" />Utah
                                                                                                        <option value="VT" />Vermont
                                                                                                        <option value="VA" />Virginia
                                                                                                        <option value="WA" />Washington
                                                                                                        <option value="WV" />West Virginia
                                                                                                        <option value="WI" />Wisconsin
                                                                                                        <option value="WY" />Wyoming
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div><!--/span-->
                                                </div><!--/row-->

                                                <div class="space-24"></div>

                                                <h3 class="header smaller lighter blue">
                                                        Checkboxes & Radio
                                                        <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
                                                </h3>

                                                <div class="row-fluid">
                                                        <div class="span5">
                                                                <div class="control-group">
                                                                        <label class="control-label">Checkbox</label>

                                                                        <div class="controls">
                                                                                <label>
                                                                                        <input name="form-field-checkbox" type="checkbox" />
                                                                                        <span class="lbl"> choice 1</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input name="form-field-checkbox" type="checkbox" />
                                                                                        <span class="lbl"> choice 2</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" />
                                                                                        <span class="lbl"> choice 3</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input name="form-field-checkbox" disabled="" type="checkbox" />
                                                                                        <span class="lbl"> disabled</span>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="span6">
                                                                <div class="control-group">
                                                                        <label class="control-label">Radio</label>

                                                                        <div class="controls">
                                                                                <label>
                                                                                        <input name="form-field-radio" type="radio" />
                                                                                        <span class="lbl"> radio option 1</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input name="form-field-radio" type="radio" />
                                                                                        <span class="lbl"> radio option 2</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input name="form-field-radio" type="radio" />
                                                                                        <span class="lbl"> radio option 3</span>
                                                                                </label>

                                                                                <label>
                                                                                        <input disabled="" name="form-field-radio" type="radio" />
                                                                                        <span class="lbl"> disabled</span>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div><!--/row-->

                                                <hr />
                                                <div class="control-group">
                                                        <label class="control-label">On/Off Switches</label>

                                                        <div class="controls">
                                                                <div class="row-fluid">
                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>

                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-2" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>

                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-3" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>
                                                                </div>

                                                                <div class="row-fluid">
                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-4" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>

                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-5" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>

                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-6" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>

                                                                        <div class="span3">
                                                                                <label>
                                                                                        <input name="switch-field-1" class="ace-switch ace-switch-7" type="checkbox" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <hr />
                                                <div class="row-fluid">
                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Custom File Input</h4>

                                                                                <span class="widget-toolbar">
                                                                                        <a href="#" data-action="collapse">
                                                                                                <i class="icon-chevron-up"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="close">
                                                                                                <i class="icon-remove"></i>
                                                                                        </a>
                                                                                </span>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <input type="file" id="id-input-file-2" />
                                                                                        <input multiple="" type="file" id="id-input-file-3" />
                                                                                        <label>
                                                                                                <input type="checkbox" name="file-format" id="id-file-format" />
                                                                                                <span class="lbl"> Allow only images</span>
                                                                                        </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>jQuery UI Sliders</h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <div class="span1">
                                                                                                        <div id="slider-range"></div>
                                                                                                </div>

                                                                                                <div class="span11">
                                                                                                        <div id="eq">
                                                                                                                <span class="ui-slider-green">77</span>
                                                                                                                <span class="ui-slider-red">55</span>
                                                                                                                <span class="ui-slider-purple">33</span>
                                                                                                                <span class="ui-slider-orange">40</span>
                                                                                                                <span class="ui-slider-dark">88</span>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Spinners</h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <input type="text" class="input-mini" id="spinner1" />
                                                                                        <div class="space-6"></div>

                                                                                        <input type="text" class="input-mini" id="spinner2" />
                                                                                        <div class="space-6"></div>

                                                                                        <input type="text" class="input-mini" id="spinner3" />
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <hr />
                                                <div class="row-fluid">
                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Date Picker</h4>

                                                                                <span class="widget-toolbar">
                                                                                        <a href="#" data-action="settings">
                                                                                                <i class="icon-cog"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="reload">
                                                                                                <i class="icon-refresh"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="collapse">
                                                                                                <i class="icon-chevron-up"></i>
                                                                                        </a>

                                                                                        <a href="#" data-action="close">
                                                                                                <i class="icon-remove"></i>
                                                                                        </a>
                                                                                </span>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <label for="id-date-picker-1">Date Picker</label>
                                                                                        </div>

                                                                                        <div class="control-group">
                                                                                                <div class="row-fluid input-append">
                                                                                                        <input class="span10 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                                                                                        <span class="add-on">
                                                                                                                <i class="icon-calendar"></i>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="id-date-range-picker-1">Date Range Picker</label>
                                                                                        </div>

                                                                                        <div class="control-group">
                                                                                                <div class="row-fluid input-prepend">
                                                                                                        <span class="add-on">
                                                                                                                <i class="icon-calendar"></i>
                                                                                                        </span>

                                                                                                        <input class="span10" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid">
                                                                                                <label for="timepicker1">Time Picker</label>
                                                                                        </div>

                                                                                        <div class="control-group">
                                                                                                <div class="input-append bootstrap-timepicker">
                                                                                                        <input id="timepicker1" type="text" class="input-small" />
                                                                                                        <span class="add-on">
                                                                                                                <i class="icon-time"></i>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>
                                                                                        <i class="icon-tint"></i>
                                                                                        Color Picker
                                                                                </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="row-fluid">
                                                                                                <label for="colorpicker1">Color Picker</label>
                                                                                        </div>

                                                                                        <div class="control-group">
                                                                                                <div class="bootstrap-colorpicker">
                                                                                                        <input id="colorpicker1" type="text" class="input-mini" />
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <label for="simple-colorpicker-1">Custom Color Picker</label>

                                                                                        <select id="simple-colorpicker-1" class="hide">
                                                                                                <option value="#ac725e" />#ac725e
                                                                                                <option value="#d06b64" />#d06b64
                                                                                                <option value="#f83a22" />#f83a22
                                                                                                <option value="#fa573c" />#fa573c
                                                                                                <option value="#ff7537" />#ff7537
                                                                                                <option value="#ffad46" selected="" />#ffad46
                                                                                                <option value="#42d692" />#42d692
                                                                                                <option value="#16a765" />#16a765
                                                                                                <option value="#7bd148" />#7bd148
                                                                                                <option value="#b3dc6c" />#b3dc6c
                                                                                                <option value="#fbe983" />#fbe983
                                                                                                <option value="#fad165" />#fad165
                                                                                                <option value="#92e1c0" />#92e1c0
                                                                                                <option value="#9fe1e7" />#9fe1e7
                                                                                                <option value="#9fc6e7" />#9fc6e7
                                                                                                <option value="#4986e7" />#4986e7
                                                                                                <option value="#9a9cff" />#9a9cff
                                                                                                <option value="#b99aff" />#b99aff
                                                                                                <option value="#c2c2c2" />#c2c2c2
                                                                                                <option value="#cabdbf" />#cabdbf
                                                                                                <option value="#cca6ac" />#cca6ac
                                                                                                <option value="#f691b2" />#f691b2
                                                                                                <option value="#cd74e6" />#cd74e6
                                                                                                <option value="#a47ae2" />#a47ae2
                                                                                                <option value="#555" />#555
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="span4">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>
                                                                                        <i class="icon-dashboard"></i>
                                                                                        Knob Input
                                                                                </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <div class="control-group">
                                                                                                <div class="row-fluid">
                                                                                                        <div class="span6 center">
                                                                                                                <div class="knob-container inline">
                                                                                                                        <input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="span6 center">
                                                                                                                <div class="knob-container inline">
                                                                                                                        <input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" />
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="row-fluid">
                                                                                                        <div class="span12 center">
                                                                                                                <div class="knob-container inline">
                                                                                                                        <input type="text" class="input-small knob" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#B8877F" data-angleoffset="90" data-cursor="true" />
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </form>

                                        <div class="hr hr-18 dotted hr-double"></div>

                                        <h4 class="pink">
                                                <i class="icon-hand-right green"></i>
                                                <a href="#modal-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
                                        </h4>

                                        <div class="hr hr-18 dotted hr-double"></div>
                                        <h4 class="header green">Form Layouts</h4>

                                        <div class="row-fluid">
                                                <div class="span5">
                                                        <div class="widget-box">
                                                                <div class="widget-header">
                                                                        <h4>Default</h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                        <div class="widget-main no-padding">
                                                                                <form />
                                                                                        <!--<legend>Form</legend>-->

                                                                                        <fieldset>
                                                                                                <label>Label name</label>

                                                                                                <input type="text" placeholder="Type something&hellip;" />
                                                                                                <span class="help-block">Example block-level help text here.</span>

                                                                                                <label class="pull-right">
                                                                                                        <input type="checkbox" />
                                                                                                        <span class="lbl"> check me out</span>
                                                                                                </label>
                                                                                        </fieldset>

                                                                                        <div class="form-actions center">
                                                                                                <button onclick="return false;" class="btn btn-small btn-success">
                                                                                                        Submit
                                                                                                        <i class="icon-arrow-right icon-on-right bigger-110"></i>
                                                                                                </button>
                                                                                        </div>
                                                                                </form>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="span7">
                                                        <div class="row-fluid">
                                                                <div class="widget-box">
                                                                        <div class="widget-header">
                                                                                <h4>Inline Forms</h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <form class="form-inline" />
                                                                                                <input type="text" class="input-small" placeholder="Email" />
                                                                                                <input type="password" class="input-small" placeholder="Password" />
                                                                                                <label class="checkbox">
                                                                                                        <input type="checkbox" />
                                                                                                        <span class="lbl"> remember me</span>
                                                                                                </label>

                                                                                                <button onclick="return false;" class="btn btn-info btn-small">
                                                                                                        <i class="icon-key bigger-110"></i>
                                                                                                        Login
                                                                                                </button>
                                                                                        </form>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="space-6"></div>

                                                        <div class="row-fluid">
                                                                <div class="widget-box">
                                                                        <div class="widget-header widget-header-small">
                                                                                <h5 class="lighter">Search Form</h5>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                                <div class="widget-main">
                                                                                        <form class="form-search" />
                                                                                                <input type="text" class="input-medium search-query" />
                                                                                                <button onclick="return false;" class="btn btn-purple btn-small">
                                                                                                        Search
                                                                                                        <i class="icon-search icon-on-right bigger-110"></i>
                                                                                                </button>
                                                                                        </form>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div id="modal-form" class="modal hide" tabindex="-1">
                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="blue bigger">Please fill the following form fields</h4>
                                                </div>

                                                <div class="modal-body overflow-visible">
                                                        <div class="row-fluid">
                                                                <div class="span5">
                                                                        <div class="space"></div>

                                                                        <input type="file" />
                                                                </div>

                                                                <div class="vspace"></div>

                                                                <div class="span7">
                                                                        <div class="control-group">
                                                                                <label for="form-field-select-3">Location</label>

                                                                                <div class="controls">
                                                                                        <select class="chzn-select" data-placeholder="Choose a Country...">
                                                                                                <option value="" />
                                                                                                <option value="AL" />Alabama
                                                                                                <option value="AK" />Alaska
                                                                                                <option value="AZ" />Arizona
                                                                                                <option value="AR" />Arkansas
                                                                                                <option value="CA" />California
                                                                                                <option value="CO" />Colorado
                                                                                                <option value="CT" />Connecticut
                                                                                                <option value="DE" />Delaware
                                                                                                <option value="FL" />Florida
                                                                                                <option value="GA" />Georgia
                                                                                                <option value="HI" />Hawaii
                                                                                                <option value="ID" />Idaho
                                                                                                <option value="IL" />Illinois
                                                                                                <option value="IN" />Indiana
                                                                                                <option value="IA" />Iowa
                                                                                                <option value="KS" />Kansas
                                                                                                <option value="KY" />Kentucky
                                                                                                <option value="LA" />Louisiana
                                                                                                <option value="ME" />Maine
                                                                                                <option value="MD" />Maryland
                                                                                                <option value="MA" />Massachusetts
                                                                                                <option value="MI" />Michigan
                                                                                                <option value="MN" />Minnesota
                                                                                                <option value="MS" />Mississippi
                                                                                                <option value="MO" />Missouri
                                                                                                <option value="MT" />Montana
                                                                                                <option value="NE" />Nebraska
                                                                                                <option value="NV" />Nevada
                                                                                                <option value="NH" />New Hampshire
                                                                                                <option value="NJ" />New Jersey
                                                                                                <option value="NM" />New Mexico
                                                                                                <option value="NY" />New York
                                                                                                <option value="NC" />North Carolina
                                                                                                <option value="ND" />North Dakota
                                                                                                <option value="OH" />Ohio
                                                                                                <option value="OK" />Oklahoma
                                                                                                <option value="OR" />Oregon
                                                                                                <option value="PA" />Pennsylvania
                                                                                                <option value="RI" />Rhode Island
                                                                                                <option value="SC" />South Carolina
                                                                                                <option value="SD" />South Dakota
                                                                                                <option value="TN" />Tennessee
                                                                                                <option value="TX" />Texas
                                                                                                <option value="UT" />Utah
                                                                                                <option value="VT" />Vermont
                                                                                                <option value="VA" />Virginia
                                                                                                <option value="WA" />Washington
                                                                                                <option value="WV" />West Virginia
                                                                                                <option value="WI" />Wisconsin
                                                                                                <option value="WY" />Wyoming
                                                                                        </select>
                                                                                </div>
                                                                        </div>

                                                                        <div class="control-group">
                                                                                <label class="control-label" for="form-field-username">Username</label>

                                                                                <div class="controls">
                                                                                        <input type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                                                                                </div>
                                                                        </div>

                                                                        <div class="control-group">
                                                                                <label class="control-label" for="form-field-first">Name</label>

                                                                                <div class="controls">
                                                                                        <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                                                                                        <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                        <button class="btn btn-small" data-dismiss="modal">
                                                                <i class="icon-remove"></i>
                                                                Cancel
                                                        </button>

                                                        <button class="btn btn-small btn-primary">
                                                                <i class="icon-ok"></i>
                                                                Save
                                                        </button>
                                                </div>
                                        </div><!--PAGE CONTENT ENDS-->
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
<?php $cs->registerScriptFile('/assets/js/excanvas.min.js', CClientScript::POS_END, array('media' => 'lte IE 8'));?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery-ui-1.10.3.custom.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.ui.touch-punch.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/chosen.jquery.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/fuelux/fuelux.spinner.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/date-time/bootstrap-datepicker.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/date-time/bootstrap-timepicker.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/date-time/moment.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/date-time/daterangepicker.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootstrap-colorpicker.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.knob.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.autosize-min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.inputlimiter.1.3.1.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.maskedinput.min.js', CClientScript::POS_END);?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootstrap-tag.min.js', CClientScript::POS_END);?>

<?php //<!--inline scripts related to this page-->
$cs->registerScript('forms', "
$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value='This text field is readonly!';
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value='This text field is disabled!';
					}
				});
			
			
				$('.chzn-select').chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: '\\n'});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						'limit': limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$('.input-mask-product').mask('a*-999-a999',{placeholder:' ',completed:function(){alert('You typed the following: '+this.val());}});
				
				
				
				$( '#input-size-slider' ).css('width','200px').slider({
					value:1,
					range: 'min',
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( '#input-span-slider' ).slider({
					value:1,
					range: 'min',
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( '#slider-range' ).css('height','200px').slider({
					orientation: 'vertical',
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+'';
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append(\"<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>\");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( '#slider-range-max' ).slider({
					range: 'max',
					min: 1,
					max: 10,
					value: 2
				});
				
				$( '#eq > span' ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: 'min',
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = 'Drop images here or click to choose';
						no_icon = 'icon-picture';
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === 'string') {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = 'Drop files here or click to choose';
						no_icon = 'icon-cloud-upload';
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$('.knob').knob();
				
				
				//we could just set the data-provide='tag' of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id=\"'+tag_input.attr('id')+'\" name=\"'+tag_input.attr('name')+'\" rows=\"3\">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: '\\n'});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			})
		


", CClientScript::POS_END);
?>