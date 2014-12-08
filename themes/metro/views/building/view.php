<?php
/**
 * Description of view
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/colorbox.css'); ?>

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
                <a href="#"><?php $this->breadcrumbs=array($model->title,); ?></a>

                <span class="divider">
                        <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            <li class="active"><?php $this->pageTitle=$model->title; ?></li>
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
                รายละเอียดเกี่ยวกับตัวอาคาร
                <small>
                    <i class="icon-double-angle-right"></i>
                    3 styles with inline editable feature
                </small>
            </h1>
        </div><!--/.page-header-->
        
        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
                <?php $this->renderPartial('_view', array(
                        'data'=>$model,
                )); ?>
                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
        
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-small">
                        <h4 class="smaller">
                            <i class="icon-check bigger-110"></i>
                            แผนที่
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="span12">
                                    <?php
                                         $this->widget('ext.widgets.google.XGoogleBboxMap', array(
                                             'googleApiKey'=>Yii::app()->params['googleApiKey'],
                                             'model'=>$map,
                                             'width'=>'720px',
                                             'height'=>'350px'
                                         ));
                                    ?>
                                    
                            </div><!--/span-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/row-fluid-->
        
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-small">
                        <h4 class="smaller">
                            <i class="icon-check bigger-110"></i>
                            review หอพัก
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="span12">
                                    
                                    <?php if($model->commentCount>=1): ?>
                                        <h4 class="blue">
                                                <?php echo $model->commentCount>1 ? $model->commentCount . ' Reviews' : 'One comment'; ?>
                                        </h4>

                                        <?php $this->renderPartial('_comments',array(
                                                'post'=>$model,
                                                'comments'=>$model->comments,
                                        )); ?>
                                    <?php endif; ?>
                                        
                                    <h3>แสดงความคิดเห็น</h3>

                                    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
                                            <div class="flash-success">
                                                    <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
                                            </div>
                                    <?php else: ?>
                                            <?php 
                                                $this->renderPartial('/comment/_form',array(
                                                'model'=>$comment,
                                                )); 
                                            ?>
                                    <?php endif; ?>
                            </div><!--/span-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/row-fluid-->
                                        
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
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.colorbox-min.js');?>
<?php //<!--inline scripts related to this page-->?>
<?php
$cs->registerScript('gallery','
    $(function() {
	var colorbox_params = {
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:"<i class=\"icon-arrow-left\"></i>",
		next:"<i class=\"icon-arrow-right\"></i>",
		close:"&times;",
		current:"{current} of {total}",
		maxWidth:"100%",
		maxHeight:"100%",
		onOpen:function(){
			document.body.style.overflow = "hidden";
		},
		onClosed:function(){
			document.body.style.overflow = "auto";
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$(".ace-thumbnails [data-rel=\"colorbox\"]").colorbox(colorbox_params);
	$("#cboxLoadingGraphic").append("<i class=\"icon-spinner orange\"></i>");//let"s add a custom loading icon

	/**$(window).on("resize.colorbox", function() {
		try {
			//this function has been changed in recent versions of colorbox, so it won"t work
			$.fn.colorbox.load();//to redraw the current frame
		} catch(e){}
	});*/
})
    ',  CClientScript::POS_END);
?>

