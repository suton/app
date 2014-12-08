<?php

/**
 * Description of _view_index
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$baseUrl=  Yii::app()->request->baseUrl;
?>
<li class="col-md-3 col-sm-6 type-rent">
        <div class="property-block">
            <a href="<?php echo Yii::app()->createUrl('site/fdetail',array('id'=>$data->id));?>" class="property-featured-image">
                <img src="<?php echo $baseUrl;?>/images/post-cover/preview/<?php echo $data->id;?>.png" alt="" width="350px" height="200px"/>
                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                <span class="badges">Rent</span>
               
            </a>
        <div class="property-info">
            <h4><a href="<?php echo Yii::app()->createUrl('site/fdetail',array('id'=>$data->id));?>"><?php echo $data->name;?></a></h4>
<!--                <span class="location">NYC</span>-->
            
             <?php
                    $this->widget('CStarRating',array(
                        'name'=>'star'.$data->id,
                        'value'=>  Rating::avgRating($data->id),
                        'readOnly'=>true,
                    ));
            ?>
                
                <div class="price"><strong>$</strong><span>ต่ำสุด/เดือน <?php echo RoomTypeFeeItem::leastValueOfBuilding($data->id);?> บาท</span></div>
        </div>
<!--        <div class="property-amenities clearfix">
                <span class="area"><strong>5000</strong>Area</span>
                <span class="baths"><strong>3</strong>Baths</span>
                <span class="beds"><strong>3</strong>Beds</span>
                <span class="parking"><strong>1</strong>Parking</span>
            </div>
        </div>-->
  </li>
