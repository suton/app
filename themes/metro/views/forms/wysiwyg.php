<?php $baseUrl=Yii::app()->theme->baseUrl; ?>
<?php $cs=  Yii::app()->clientScript; ?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/jquery-ui-1.10.3.custom.min.css'); ?>

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
                                    <li class="active">Wysiwyg &amp; Markdown</li>
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
                                    <h1>Wysiwyg &amp; Markdown Editor </h1>
                            </div><!--/.page-header-->

                            <div class="row-fluid">
                                    <div class="span12">
                                            <!--PAGE CONTENT BEGINS-->

                                            <h4 class="header green clearfix">
                                                    Bootstrap Lightweight Editor
                                                    <span class="block pull-right">
                                                            <small class="grey middle">Choose style: &nbsp;</small>

                                                            <span class="btn-toolbar inline middle no-margin">
                                                                    <span data-toggle="buttons-radio" class="btn-group no-margin">
                                                                            <button class="btn btn-mini btn-yellow">1</button>
                                                                            <button class="btn btn-mini btn-yellow active">2</button>
                                                                            <button class="btn btn-mini btn-yellow">3</button>
                                                                    </span>
                                                            </span>
                                                    </span>
                                            </h4>

                                            <div class="wysiwyg-editor" id="editor1"></div>

                                            <div class="hr hr-double dotted"></div>

                                            <div class="row-fluid">
                                                    <div class="span6">
                                                            <h4 class="header blue">Inside Widget</h4>

                                                            <div class="widget-box">
                                                                    <div class="widget-header widget-header-small  header-color-green">
                                                                            <div class="widget-toolbar">
                                                                                    <a href="#" data-action="collapse">
                                                                                            <i class="icon-chevron-up"></i>
                                                                                    </a>
                                                                            </div>
                                                                    </div>

                                                                    <div class="widget-body">
                                                                            <div class="widget-main no-padding">
                                                                                    <div class="wysiwyg-editor" id="editor2"></div>
                                                                            </div>

                                                                            <div class="widget-toolbox padding-4 clearfix">
                                                                                    <div class="btn-group pull-left">
                                                                                            <button class="btn btn-small btn-grey">
                                                                                                    <i class="icon-remove bigger-125"></i>
                                                                                                    Cancel
                                                                                            </button>
                                                                                    </div>

                                                                                    <div class="btn-group pull-right">
                                                                                            <button class="btn btn-small btn-danger">
                                                                                                    <i class="icon-save bigger-125"></i>
                                                                                                    Save
                                                                                            </button>

                                                                                            <button class="btn btn-small btn-success">
                                                                                                    <i class="icon-globe bigger-125"></i>

                                                                                                    Publish
                                                                                                    <i class="icon-arrow-right icon-on-right bigger-125"></i>
                                                                                            </button>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class="span6">
                                                            <h4 class="header green">Markdown Editor</h4>

                                                            <div class="widget-box">
                                                                    <div class="widget-header widget-header-small header-color-blue">  </div>

                                                                    <div class="widget-body">
                                                                            <div class="widget-main no-padding">
                                                                                    <textarea class="span12" name="content" data-provide="markdown" rows="10">**Markdown Editor** inside a *widget box*

- list item 1
- list item 2
- list item 3</textarea>
                                                                            </div>

                                                                            <div class="widget-toolbox padding-4 clearfix">
                                                                                    <div class="btn-group pull-left">
                                                                                            <button class="btn btn-small btn-info">
                                                                                                    <i class="icon-remove bigger-125"></i>
                                                                                                    Cancel
                                                                                            </button>
                                                                                    </div>

                                                                                    <div class="btn-group pull-right">
                                                                                            <button class="btn btn-small btn-purple">
                                                                                                    <i class="icon-save bigger-125"></i>
                                                                                                    Save
                                                                                            </button>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>

                                            <script type="text/javascript">
                                                    var assets = "assets";//this will be used in loading jQuery UI if needed!
                                            </script>

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
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery-ui-1.10.3.custom.min.js',  CClientScript::POS_END); ?>    
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.ui.touch-punch.min.js',  CClientScript::POS_END); ?>    
<?php $cs->registerScriptFile($baseUrl.'/assets/js/markdown/markdown.min.js',  CClientScript::POS_END); ?>    
<?php $cs->registerScriptFile($baseUrl.'/assets/js/markdown/bootstrap-markdown.min.js',  CClientScript::POS_END); ?>    
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.hotkeys.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootstrap-wysiwyg.min.js',  CClientScript::POS_END); ?>
<?php $cs->registerScriptFile($baseUrl.'/assets/js/bootbox.min.js',  CClientScript::POS_END); ?>
<?php //<!--inline scripts related to this page--> ?>
<?php
$script=<<<EOD
$(function(){
	
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

	//but we want to change a few buttons colors for the third style
	$('#editor1').ace_wysiwyg({
		toolbar:
		[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
		],
		'wysiwyg': {
			fileUploadError: showErrorAlert
		}
	}).prev().addClass('wysiwyg-style2');

	

	$('#editor2').css({'height':'200px'}).ace_wysiwyg({
		toolbar_place: function(toolbar) {
			return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar);
		},
		toolbar:
		[
			'bold',
			{name:'italic' , title:'Change Title!', icon: 'icon-leaf'},
			'strikethrough',
			'underline',
			null,
			'insertunorderedlist',
			'insertorderedlist',
			null,
			'justifyleft',
			'justifycenter',
			'justifyright'
		],
		speech_button:false
	});


	$('[data-toggle="buttons-radio"]').on('click', function(e){
		var target = $(e.target);
		var which = parseInt($.trim(target.text()));
		var toolbar = $('#editor1').prev().get(0);
		if(which == 1 || which == 2 || which == 3) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
		}
	});





	//Add Image Resize Functionality to Chrome and Safari
	//webkit browsers don't have image resize functionality when content is editable
	//so let's add something using jQuery UI resizable
	//another option would be opening a dialog for user to enter dimensions.
	if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {
		
		var lastResizableImg = null;
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

		var enableImageResize = function() {
			$('.wysiwyg-editor')
			.on('mousedown', function(e) {
				var target = $(e.target);
				if( e.target instanceof HTMLImageElement ) {
					if( !target.data('resizable') ) {
						target.resizable({
							aspectRatio: e.target.width / e.target.height,
						});
						target.data('resizable', true);
						
						if( lastResizableImg != null ) {//disable previous resizable image
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
						}
						lastResizableImg = target;
					}
				}
			})
			.on('click', function(e) {
				if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
					destroyResizable();
				}
			})
			.on('keydown', function() {
				destroyResizable();
			});
	    }
		
		enableImageResize();

		/**
		//or we can load the jQuery UI dynamically only if needed
		if (typeof jQuery.ui !== 'undefined') enableImageResize();
		else {//load jQuery UI if not loaded
			$.getScript(assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
				if('ontouchend' in document) {//also load touch-punch for touch devices
					$.getScript(assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
						enableImageResize();
					});
				} else	enableImageResize();
			});
		}
		*/
	}


});
EOD;
$cs->registerScript('wysiwyg',$script,  CClientScript::POS_END);
?>