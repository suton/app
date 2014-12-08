<?php

/**
 * Description of f_detail
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$baseUrl=  Yii::app()->request->baseUrl;
 
?>
 <!-- Site Showcase -->
  <div class="site-showcase">
    <!-- Start Google Map -->
<!--    <div class="clearfix map-single-page" id="gmap"></div>-->
    <!-- End Google Map -->
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="single-property">
                <h2 class="page-title"><?php echo $building->name;?>, <span class="location">New York</span></h2>
              <div class="row">
                  <div class="col-md-3">
                      <div class="price"><strong>$</strong><span>ต่ำสุด/เดือน <?php echo RoomTypeFeeItem::leastValueOfBuilding($building->id);?> บาท</span></div>
                  </div>
                  <div class="col-md-3">
                       &nbsp;ให้คะแนน
                       <?php 
                            $this->widget('CStarRating',array(
                                'name'=>'buildingRating',
                                'value'=>  Rating::avgRating($building->id),
                                'callback'=>'
                                    function(){
                                        $.ajax({
                                            type:"POST",
                                            url:"'.  Controller::createUrl('ajax/rating').'",
                                            data:"rating="+$(this).val()+"&building_id='.$building->id.'",
                                            success:function(msg){
//                                                alert(msg);
                                                $("#returnMsg").html(msg);
                                            }
                                        })
                                    }
                                    '
                            ));
                       ?>
                       <div id="returnMsg"></div>
                  </div>
              </div>
              
              <div class="property-amenities clearfix"> <span class="area"><strong>For</strong>Rent</span> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
              <div class="property-slider">
                <div id="property-images" class="flexslider">
                  <ul class="slides">

                        <?php $photos = $building->galleryBehavior->getGalleryPhotos(); ?>
                        <?php if (count($photos)): ?>
                            <?php foreach ($photos as $photo): ?>
                                <li class="item">
                                    <?php echo CHtml::image($photo->getUrl('medium'),'');?>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                  </ul>
                </div>
                <div id="property-thumbs" class="flexslider">
                  <ul class="slides">
                        <?php $photos = $building->galleryBehavior->getGalleryPhotos(); ?>
                        <?php if (count($photos)): ?>
                            <?php foreach ($photos as $photo): ?>
                                <li class="item">
                                    <?php echo CHtml::image($photo->getUrl('small'),'');?>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="tabs">
                <ul class="nav nav-tabs">
                  <li class="active"> <a data-toggle="tab" href="#description"> Description </a> </li>
                  <li> <a data-toggle="tab" href="#amenities"> Additional Amenities </a> </li>
                </ul>
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <?php echo $building->content;?>
                  </div>
                  <div id="amenities" class="tab-pane">
                    	<div class="additional-amenities">
                            <?php
                            foreach (Yii::app()->db->schema->getTable('Amenities')->columns as $key=>$val){
                                if(!($key=='building_id'))
                                echo '<span class="'.(($amenity->$key)?"available":"").'"><i class="fa fa-check-square"></i> '.$amenity->getAttributeLabel($key).'</span>';
                            }
                            ?>
                     	</div>
                  </div>
                </div>
              </div>

              <h3>แผนที่</h3>
              <div class="agent">
                    <div class="row">
                    	<div class="col-md-12">
                            	<?php
                                    $this->widget('ext.widgets.google.XGoogleBboxMap', array(
                                        'googleApiKey'=>Yii::app()->params['googleApiKey'],
                                        'model'=>$map,
                                        'width'=>'720px',
                                        'height'=>'350px'
                                    ));
                                ?>
                        </div>
                    </div>
              </div>
              
                <div class="row">
                    <div class="col-md-12">
                            <section id="comments" class="post-comments">
                                <?php if($building->commentCount>=1): ?>
                                    <h3>
                                        <i class="fa fa-comment"></i> 
                                        <?php echo $building->commentCount>1 ? 'Comments('.$building->commentCount . ')' : 'One comment'; ?>
                                    </h3>

                                    <?php /*$this->renderPartial('_comments',array(
                                                //'post'=>$building,
                                                'comments'=>$building->comments,
                                    )); */?>
                                
                                    <?php
                                        $this->widget('zii.widgets.CListView',array(
                                            'id'=>'commentsReview',
                                            'dataProvider'=>$dataComment,
                                            'itemView'=>'_listComments',
                                            'itemsTagName'=>'ol',
                                            'itemsCssClass'=>'comments',
                                            'pagerCssClass' =>'xx',
                                            'summaryText'=>'Result {start} - {end} of {count} results',//'Result {start} - {end} of {count} results'
                                            'htmlOptions'=>array('class'=>'property-listing'),
                                            'pager' => Array(
                                                'htmlOptions'=>array('class'=>'pagination'),
                                                'header' => '',
                                                'prevPageLabel' => '<i class="fa fa-chevron-left"></i></a>',
                                                'nextPageLabel' => '<i class="fa fa-chevron-right"></i>',
                                                'selectedPageCssClass'=>'active',//default "selected"
                                            ),
                                        ));
                                    ?>
                                <?php endif; ?>
                            </section>

                            <h3>แสดงความคิดเห็น</h3>

                            <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
                                    <div class="flash-success">
                                            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
                                    </div>
                            <?php else: ?>
                                    <?php
                                        $this->renderPartial('/comment/_form',array(
                                        'model'=>$comment,
                                        'building_id'=>$building->id
                                        ));
                                    ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Start Related Properties -->
            <h3>Related Properties</h3>
            <div class="property-grid">
              <ul class="grid-holder col-3">
                <li class="grid-item type-rent">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property2.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                    <div class="property-info">
                      <h4><a href="#">116 Waverly Place</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                  </div>
                </li>
                <li class="grid-item type-buy">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property3.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                    <div class="property-info">
                      <h4><a href="#">232 East 63rd Street</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><strong>$</strong><span>250000</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                  </div>
                </li>
                <li class="grid-item type-rent">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property5.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                    <div class="property-info">
                      <h4><a href="#">55 Warren Street</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><strong>$</strong><span>300000</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="sidebar right-sidebar col-md-3">
            <div class="widget sidebar-widget">
              <h3 class="widgettitle">Search Properties</h3>
              <div class="full-search-form">
                    <?php
                        
                        echo CHtml::form(Yii::app()->createUrl('site/search'),'get');
                        
                        echo CHtml::dropDownList('building_type_id',
                                (isset($_GET['buildingType']))?$_GET['buildingType']:'',
                                CHtml::listData(BuildingType::model()->findAll(),'id','typename'),
                                array('class'=>'form-control input-lg'));
                        
                        echo CHtml::dropDownList(
                            'province_id',
                            (isset($_GET['province_id'])?$_GET['province_id']:''),
                            CHtml::listData(
                                    Province::model()->findAll(
                                            array('order'=>'PROVINCE_NAME')),
                                            'PROVINCE_ID', 
                                            'PROVINCE_NAME'
                            ),
                            array(
                                'class'=>'form-control input-lg',
                                'prompt'=>'--กรุณาเลือกจังหวัด--',
                                'ajax'=>array(
                                        'type'=>'POST',
                                        'url'=>  Controller::createUrl('Ajax/UpdateAmphur'),
                                        'data'=>array('PROVINCE_ID'=>'js:this.value'),
                                        'update'=>'#amphur_id'
                                    )
                                ));
                        
                        echo CHtml::dropDownList(
                            'amphur_id',
                            (isset($_GET['amphur_id'])?$_GET['amphur_id']:''),
                            CHtml::listData(
                                    Amphur::model()->findAll(
                                            'PROVINCE_ID=:PROVINCE_ID',
                                            array(':PROVINCE_ID'=>(isset($_GET['province_id'])?$_GET['province_id']:''))
                                    ),
                                    'AMPHUR_ID',
                                    'AMPHUR_NAME'
                            ),
                            array(
                                'prompt'=>'--กรุณาเลือกอำเภอ--',
                                'class'=>'form-control input-lg'
                            ));
                        //echo CHtml::htmlButton($label, $htmlOptions);
                        echo CHtml::htmlButton('<i class="fa fa-search"></i> Search', array('class'=>'btn btn-primary btn-block','type'=>'submit'));
                        
                        echo CHtml::endForm();
                    ?>

              </div>
            </div>
            <div class="widget sidebar-widget featured-properties-widget">
              <h3 class="widgettitle">Featured Properties</h3>
              <ul class="owl-carousel owl-alt-controls1 single-carousel" data-columns="1" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="yes">
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property1.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                  <div class="property-info">
                    <h4><a href="#">116 Waverly Place</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property2.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                  <div class="property-info">
                    <h4><a href="#">232 East 63rd Street</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><strong>$</strong><span>250000</span></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property3.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                  <div class="property-info">
                    <h4><a href="#">55 Warren Street</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><strong>$</strong><span>300000</span></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="<?php echo $baseUrl; ?>/images/property4.jpg" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                  <div class="property-info">
                    <h4><a href="#">459 West Broadway</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
