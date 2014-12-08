<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/select2.css'); ?>
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
                                <li class="active">Wizard &amp; Validation</li>
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
                                        Form Wizard
                                        <small>
                                                <i class="icon-double-angle-right"></i>
                                                and Validation
                                        </small>
                                </h1>
                        </div><!--/.page-header-->

                        <div class="row-fluid">
                                <div class="span12">
                                        <!--PAGE CONTENT BEGINS-->

                                        <h4 class="lighter">
                                                <i class="icon-hand-right icon-animated-hand-pointer blue"></i>
                                                <a href="#modal-wizard" data-toggle="modal" class="pink"> Wizard Inside a Modal Box </a>
                                        </h4>

                                        <div class="hr hr-18 hr-double dotted"></div>

                                        <div class="row-fluid">
                                                <div class="span12">
                                                        <div class="widget-box">
                                                                <div class="widget-header widget-header-blue widget-header-flat">
                                                                        <h4 class="lighter">New Item Wizard</h4>

                                                                        <div class="widget-toolbar">
                                                                                <label>
                                                                                        <small class="green">
                                                                                                <b>Validation</b>
                                                                                        </small>

                                                                                        <input id="skip-validation" type="checkbox" class="ace-switch ace-switch-4" />
                                                                                        <span class="lbl"></span>
                                                                                </label>
                                                                        </div>
                                                                </div>

                                                                <div class="widget-body">
                                                                        <div class="widget-main">
                                                                                <div class="row-fluid">
                                                                                        <div id="fuelux-wizard" class="row-fluid hide" data-target="#step-container">
                                                                                                <ul class="wizard-steps">
                                                                                                        <li data-target="#step1" class="active">
                                                                                                                <span class="step">1</span>
                                                                                                                <span class="title">Validation states</span>
                                                                                                        </li>

                                                                                                        <li data-target="#step2">
                                                                                                                <span class="step">2</span>
                                                                                                                <span class="title">Alerts</span>
                                                                                                        </li>

                                                                                                        <li data-target="#step3">
                                                                                                                <span class="step">3</span>
                                                                                                                <span class="title">Payment Info</span>
                                                                                                        </li>

                                                                                                        <li data-target="#step4">
                                                                                                                <span class="step">4</span>
                                                                                                                <span class="title">Other Info</span>
                                                                                                        </li>
                                                                                                </ul>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="step-content row-fluid position-relative" id="step-container">
                                                                                                <div class="step-pane active" id="step1">
                                                                                                        <h3 class="lighter block green">Enter the following information</h3>

                                                                                                        <form class="form-horizontal" id="sample-form" />
                                                                                                                <div class="control-group warning">
                                                                                                                        <label class="control-label" for="inputWarning">Input with warning</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span6 input-icon input-icon-right">
                                                                                                                                        <input class="span12" type="text" id="inputWarning" />
                                                                                                                                        <i class="icon-warning-sign"></i>
                                                                                                                                </span>
                                                                                                                                <span class="help-inline">Something may have gone wrong</span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group error">
                                                                                                                        <label class="control-label" for="inputError">Error with tooltip</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span6 input-icon input-icon-right">
                                                                                                                                        <input class="tooltip-error span12" type="text" id="inputError" data-rel="tooltip" title="Error info!" data-trigger="focus" />
                                                                                                                                        <i class="icon-remove-sign"></i>
                                                                                                                                </span>
                                                                                                                                <span class="help-inline">Please correct the error</span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group success">
                                                                                                                        <label class="control-label" for="inputSuccess">Input with success</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span6 input-icon input-icon-right">
                                                                                                                                        <input class="span12" type="text" id="inputSuccess" />
                                                                                                                                        <i class="icon-ok-sign"></i>
                                                                                                                                </span>
                                                                                                                                <span class="help-inline">Woohoo!</span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group info">
                                                                                                                        <label class="control-label" for="inputInfo">Blue Input with Info</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span6 input-icon input-icon-right">
                                                                                                                                        <input class="span12" type="text" id="inputInfo" />
                                                                                                                                        <i class="icon-info-sign"></i>
                                                                                                                                </span>
                                                                                                                                <span class="help-inline">Info tip help!</span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </form>

                                                                                                        <form class="form-horizontal" id="validation-form" method="get" />
                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="email">Email Address:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <div class="span12">
                                                                                                                                        <input type="email" name="email" id="email" class="span6" />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="password">Password:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <div class="span12">
                                                                                                                                        <input type="password" name="password" id="password" class="span4" />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="password2">Confirm Password:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <div class="span12">
                                                                                                                                        <input type="password" name="password2" id="password2" class="span4" />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="hr hr-dotted"></div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="name">Company Name:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <input class="span6" type="text" id="name" name="name" />
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="phone">Phone Number:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <div class="span3 input-prepend">
                                                                                                                                        <span class="add-on">
                                                                                                                                                <i class="icon-phone"></i>
                                                                                                                                        </span>

                                                                                                                                        <input class="span12" type="tel" id="phone" name="phone" />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="url">Company URL:</label>

                                                                                                                        <div class="controls">
                                                                                                                                <div class="span12">
                                                                                                                                        <input type="url" id="url" name="url" class="span8" />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="hr hr-dotted"></div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label">Subscribe to</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <label>
                                                                                                                                                <input name="subscription" value="1" type="checkbox" />
                                                                                                                                                <span class="lbl"> Latest news and announcements</span>
                                                                                                                                        </label>

                                                                                                                                        <label>
                                                                                                                                                <input name="subscription" value="2" type="checkbox" />
                                                                                                                                                <span class="lbl"> Product offers and discounts</span>
                                                                                                                                        </label>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label">Gender</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <label class="blue">
                                                                                                                                                <input name="gender" value="1" type="radio" />
                                                                                                                                                <span class="lbl"> Male</span>
                                                                                                                                        </label>

                                                                                                                                        <label class="blue">
                                                                                                                                                <input name="gender" value="2" type="radio" />
                                                                                                                                                <span class="lbl"> Female</span>
                                                                                                                                        </label>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="hr hr-dotted"></div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="state">State</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <select id="state" name="state" class="select2" data-placeholder="Click to Choose...">
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
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="platform">Platform</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <select class="span3" id="platform" name="platform">
                                                                                                                                                <option value="" />------------------
                                                                                                                                                <option value="linux" />Linux
                                                                                                                                                <option value="windows" />Windows
                                                                                                                                                <option value="mac" />Mac OS
                                                                                                                                                <option value="ios" />iOS
                                                                                                                                                <option value="android" />Android
                                                                                                                                        </select>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <label class="control-label" for="comment">Comment</label>

                                                                                                                        <div class="controls">
                                                                                                                                <span class="span12">
                                                                                                                                        <textarea class="span8" name="comment" id="comment"></textarea>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <div class="controls">
                                                                                                                                <span class="span6">
                                                                                                                                        <label>
                                                                                                                                                <input name="agree" id="agree" type="checkbox" />
                                                                                                                                                <span class="lbl"> I accept the policy</span>
                                                                                                                                        </label>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </form>
                                                                                                </div>

                                                                                                <div class="step-pane" id="step2">
                                                                                                        <div class="row-fluid">
                                                                                                                <div class="alert alert-success">
                                                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                                                                <i class="icon-remove"></i>
                                                                                                                        </button>

                                                                                                                        <strong>
                                                                                                                                <i class="icon-ok"></i>
                                                                                                                                Well done!
                                                                                                                        </strong>

                                                                                                                        You successfully read this important alert message.
                                                                                                                        <br />
                                                                                                                </div>

                                                                                                                <div class="alert alert-error">
                                                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                                                                <i class="icon-remove"></i>
                                                                                                                        </button>

                                                                                                                        <strong>
                                                                                                                                <i class="icon-remove"></i>
                                                                                                                                Oh snap!
                                                                                                                        </strong>

                                                                                                                        Change a few things up and try submitting again.
                                                                                                                        <br />
                                                                                                                </div>

                                                                                                                <div class="alert alert-warning">
                                                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                                                                <i class="icon-remove"></i>
                                                                                                                        </button>
                                                                                                                        <strong>Warning!</strong>

                                                                                                                        Best check yo self, you're not looking too good.
                                                                                                                        <br />
                                                                                                                </div>

                                                                                                                <div class="alert alert-info">
                                                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                                                                <i class="icon-remove"></i>
                                                                                                                        </button>
                                                                                                                        <strong>Heads up!</strong>

                                                                                                                        This alert needs your attention, but it's not super important.
                                                                                                                        <br />
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="step-pane" id="step3">
                                                                                                        <div class="center">
                                                                                                                <h3 class="blue lighter">This is step 3</h3>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="step-pane" id="step4">
                                                                                                        <div class="center">
                                                                                                                <h3 class="green">Congrats!</h3>
                                                                                                                Your product is ready to ship! Click finish to continue!
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <hr />
                                                                                        <div class="row-fluid wizard-actions">
                                                                                                <button class="btn btn-prev">
                                                                                                        <i class="icon-arrow-left"></i>
                                                                                                        Prev
                                                                                                </button>

                                                                                                <button class="btn btn-success btn-next" data-last="Finish ">
                                                                                                        Next
                                                                                                        <i class="icon-arrow-right icon-on-right"></i>
                                                                                                </button>
                                                                                        </div>
                                                                                </div>
                                                                        </div><!--/widget-main-->
                                                                </div><!--/widget-body-->
                                                        </div>
                                                </div>
                                        </div>

                                        <div id="modal-wizard" class="modal hide">
                                                <div class="modal-header" data-target="#modal-step-contents">
                                                        <ul class="wizard-steps clearfix">
                                                                <li data-target="#modal-step1" class="active">
                                                                        <span class="step">1</span>
                                                                        <span class="title">Validation states</span>
                                                                </li>

                                                                <li data-target="#modal-step2">
                                                                        <span class="step">2</span>
                                                                        <span class="title">Alerts</span>
                                                                </li>

                                                                <li data-target="#modal-step3">
                                                                        <span class="step">3</span>
                                                                        <span class="title">Payment Info</span>
                                                                </li>

                                                                <li data-target="#modal-step4">
                                                                        <span class="step">4</span>
                                                                        <span class="title">Other Info</span>
                                                                </li>
                                                        </ul>
                                                </div>

                                                <div class="modal-body step-content" id="modal-step-contents">
                                                        <div class="step-pane active" id="modal-step1">
                                                                <div class="center">
                                                                        <h4 class="blue">Step 1</h4>
                                                                </div>
                                                        </div>

                                                        <div class="step-pane" id="modal-step2">
                                                                <div class="center">
                                                                        <h4 class="blue">Step 2</h4>
                                                                </div>
                                                        </div>

                                                        <div class="step-pane" id="modal-step3">
                                                                <div class="center">
                                                                        <h4 class="blue">Step 3</h4>
                                                                </div>
                                                        </div>

                                                        <div class="step-pane" id="modal-step4">
                                                                <div class="center">
                                                                        <h4 class="blue">Step 4</h4>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="modal-footer wizard-actions">
                                                        <button class="btn btn-small btn-prev">
                                                                <i class="icon-arrow-left"></i>
                                                                Prev
                                                        </button>

                                                        <button class="btn btn-success btn-small btn-next" data-last="Finish ">
                                                                Next
                                                                <i class="icon-arrow-right icon-on-right"></i>
                                                        </button>

                                                        <button class="btn btn-danger btn-small pull-left" data-dismiss="modal">
                                                                <i class="icon-remove"></i>
                                                                Cancel
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
<?php $cs->registerScriptFile($baseUrl.'/assets/js/fuelux/fuelux.wizard.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.validate.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/additional-methods.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootbox.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.maskedinput.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/select2.min.js',  CClientScript::POS_END); ?>

<?php //<!--inline scripts related to this page--> ?>
<?php
$script=<<<EOD
$(function() {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','150px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var validation = false;
				$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
					if(info.step == 1 && validation) {
						if(!$('#validation-form').valid()) return false;
					}
				}).on('finished', function(e) {
					bootbox.dialog("Thank you! Your information was successfully saved!", [{
						"label" : "OK",
						"class" : "btn-small btn-primary",
						}]
					);
				}).on('stepclick', function(e){
					//return false;//prevent clicking on steps
				});
			
			
				$('#validation-form').hide();
				$('#skip-validation').removeAttr('checked').on('click', function(){
					validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').show();
					}
					else {
						$('#validation-form').hide();
						$('#sample-form').show();
					}
				});
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'span',
					errorClass: 'help-inline',
					focusInvalid: false,
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: 'required',
						agree: 'required'
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-error', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.control-group').removeClass('info').addClass('error');
					},
			
					success: function (e) {
						$(e).closest('.control-group').removeClass('error').addClass('info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('.controls');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chzn-select')) {
							error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
						}
						else error.insertAfter(element);
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard .modal-header').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
			})
EOD;
$cs->registerScript('wizard',$script,  CClientScript::POS_END);
?>