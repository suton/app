<?php

/**
 * Description of roomtype
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php
$cs->scriptMap=array(
//    'jquery.js'=>FALSE,
//    'jquery.ba-bbq.js'=>FALSE,
//    'b5m.main.js'=>FALSE
)
?>
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
                                <a href="#">ผู้ประกอบการ</a>

                                <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                </span>
                        </li>
                        <li class="active">กำหนดประเภทห้อง</li>
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
                                กำหนดประเภทห้อง
                                <small>
                                        <i class="icon-double-angle-right"></i>
                                        ตั้งค่าอาคาร/ประเภทห้อง
                                </small>
                        </h1>
                </div><!--/.page-header-->

                <div class="row-fluid">
                        <div class="span12">
                                <!--PAGE CONTENT BEGINS-->
                                <div class="row-fluid">
                                        <div class="span12">
                                                <div class="tabbable">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                                <li class="active">
                                                                        <a data-toggle="tab" href="#room">
                                                                                <i class="green icon-home bigger-110"></i>
                                                                                ตั้งค่าห้อง
                                                                        </a>
                                                                </li>

                                                                <li>
                                                                        <a data-toggle="tab" href="#roomtype">
                                                                                ตั้งค่าประเภทห้อง
                                                                                <span class="badge badge-important"><?php echo RoomTypeFeeGroup::bNum();?></span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a data-toggle="tab" href="#building">
                                                                                ตั้งค่าอาคาร
                                                                                <span class="badge badge-important"><?php echo Building::bNum(Yii::app()->session["id"]);?></span>
                                                                        </a>
                                                                </li>

                                                        </ul>

                                                        <div class="tab-content">
                                                                <div id="room" class="tab-pane in active">
                                                                        <?php
                                                                            $this->renderPartial('/btrader/_room_setting',array(
                                                                                'building'=>$model
                                                                            ));
                                                                        ?>
                                                                </div>

                                                                <div id="roomtype" class="tab-pane">
                                                                        <?php
                                                                            $this->renderPartial("/building/room_type",array(
                                                                                'roomtype'=>$roomtype,    //ส่งมาจาก sidebar controller
                                                                            ));
                                                                        ?>
                                                                </div>

                                                                <div id="building" class="tab-pane">
                                                                    <?php
                                                                       echo CHtml::link('<button class="btn btn-primary">
                                                                                            <i class="icon-plus"></i>เพิ่มอาคาร
                                                                                         </button>',array('/building/create'));
                                                                    ?>
                                                                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                                                                            'dataProvider'=>$model->search(Yii::app()->session["id"]),
                                                                            'filter'=>$model,
                                                                            'itemsCssClass'=>'table table-striped table-bordered table-hover',
                                                                            'summaryText'=>'แสดง {start}-{end} จากทั้งหมด {count}',
                                                                            'columns'=>array(
                                                                                    array(
                                                                                            'type'=>'raw',
                                                                                            'value'=>'$data->coverBehavior->hasImage()?
                                                                                                    CHtml::link(
                                                                                                            CHtml::image($data->coverBehavior->getUrl("small"),"",array("style" => "height:50px;width:50px;")),
                                                                                                            $data->coverBehavior->getUrl("small"),
                                                                                                            array("class"=>"cbox_single thumbnail cboxElement","data-rel"=>"colorbox","title" => "Photo Title")
                                                                                                        ):
                                                                                                    CHtml::link(
                                                                                                            CHtml::image("'.$baseUrl.'/assets/images/gallery/Image10_tn.jpg","",array("style"=>"height:50px;width:50px;")),
                                                                                                            "'.$baseUrl.'/assets/images/gallery/Image10_tn.jpg",
                                                                                                            array("class"=>"cbox_single thumbnail cboxElement"))
                                                                                                    ',
                                                                                            'htmlOptions'=>array('style'=>'width:60px;')
                                                                                    ),
                                                                                    array(
                                                                                            'name'=>'name',
                                                                                            'type'=>'raw',
                                                                                            'value'=>'CHtml::link(CHtml::encode($data->name), $data->url)',
                                                                                            'htmlOptions'=>array('style'=>'height:60px;'),
                                                                                    ),
                                                                                    array(
                                                                                            'name'=>'status',
                                                                                            'value'=>'Lookup::item("PostStatus",$data->status)',
                                                                                            'filter'=>Lookup::items('PostStatus'),
                                                                                    ),
                                                                                    array(
                                                                                            'name'=>'create_time',
                                                                                            'type'=>'datetime',
                                                                                            'filter'=>false,
                                                                                    ),
                                                                                    array(
                                                                                            'class'=>'CButtonColumn',
                                                                                            'htmlOptions'=>array('style'=>'width:150px;'),
                                                                                            'template'=>'<div class="hidden-phone visible-desktop btn-group">{view}{update}{delete}</div>',
                                                                                            'buttons'=>array(
                                                                                                    'view'=>array(
                                                                                                        'label'=>'<button class="btn btn-mini btn-info">
                                                                                                                    <i class="icon-eye-open bigger-120"></i>
                                                                                                                 </button>',
                                                                                                        'imageUrl'=>FALSE,
                                                                                                        'url'=>'$this->grid->controller->createUrl("/Building/view", array("id"=>$data->id))',
                                                                                                        'options'=>array('title'=>'view'),
                                                                                                    ),
                                                                                                    'update'=>array(
                                                                                                        'label'=>'<button class="btn btn-mini btn-warning">
                                                                                                                    <i class="icon-edit bigger-120"></i>
                                                                                                                 </button>',
                                                                                                        'imageUrl'=>FALSE,
                                                                                                        'url'=>'$this->grid->controller->createUrl("/Building/update", array("id"=>$data->id))',
                                                                                                        'options'=>array('title'=>'update'),
                                                                                                    ),
                                                                                                    'delete'=>array(
                                                                                                        'label'=>'<button class="btn btn-mini btn-danger">
                                                                                                                    <i class="icon-trash bigger-120"></i>
                                                                                                                 </button>',
                                                                                                        'imageUrl'=>FALSE,
                                                                                                        'url'=>'$this->grid->controller->createUrl("/Building/delete", array("id"=>$data->id))',
                                                                                                        'options'=>array('title'=>'delete'),
                                                                                                    )
                                                                                            ),
                                                                                    ),
                                                                            ),
                                                                    )); ?>

                                                                </div>
                                                        </div>
                                                </div>


                                        </div><!--/span-->
                                </div><!--/row-->

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
<?php $cs->registerScriptFile($baseUrl.'/assets/js/jquery.colorbox-min.js');?>       
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
<?php
//active current tab
Yii::app()->clientScript->registerScript('settingtab','
$(function(){
          $("a[data-toggle=\"tab\"]").on("click", function (e) {
            //save the latest tab; use cookies if you like em better:
            localStorage.setItem("lastTab", $(e.target).attr("href"));
          });
          
          var lastTab = localStorage.getItem("lastTab");

          if (lastTab) {
            $("a[href=\""+lastTab+"\"]").click();
          }

    });
',  CClientScript::POS_END);
?>              
<?php
Yii::app()->clientScript->registerScript('elements',' 
    $(function() {
			
				$("#accordion2").on("hide", function (e) {
					$(e.target).prev().children(0).addClass("collapsed");
				})
				$("#accordion2").on("hidden", function (e) {
					$(e.target).prev().children(0).addClass("collapsed");
				})
				$("#accordion2").on("show", function (e) {
					$(e.target).prev().children(0).removeClass("collapsed");
				})
				$("#accordion2").on("shown", function (e) {
					$(e.target).prev().children(0).removeClass("collapsed");
				})
			});

    ',  CClientScript::POS_END);
?>

<?php //<!--inline scripts related to this page-->?>
<?php
Yii::app()->clientScript->registerScript('floor',' 
$(function() {
				///////////////////////////////////////////
			
				//show the user info on right or left depending on its position
				$("#user-profile-2 .memberdiv").on("mouseenter", function(){
					var $this = $(this);
					var $parent = $this.closest(".tab-pane");
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = "left";
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = "right";
					
					$this.find(".popover").removeClass("right left").addClass(place);
				}).on("click", function() {
					return false;
				});
			
			});
',  CClientScript::POS_END);
?>
