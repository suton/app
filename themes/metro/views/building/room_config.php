<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room_config
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
     $this->beginWidget('CActiveForm',array(
         'id'=>'roomConfig',
         'action'=>array("room/roomconfig")
     ));
?>
<div class="row-fluid">
    <div class="span1">
        <label>เลือกอาคาร</label>
    </div>
    <div class="span6">
        <?php
//            $user_building=  CHtml::listData(Building::model()->findAll(), 'id', 'name');
//            echo CHtml::dropDownList($building,"id", $user_building);
        ?>
        <select class="span8">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option selected="selected">5</option>
        </select>
        <button class="btn" type="button"><i class="icon-plus"></i></button>
    </div>
</div>
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_l1" data-toggle="tab">ชั้น 1</a></li>
        <li><a href="#tab_l2" data-toggle="tab">ชั้น 2</a></li>
        <li><a href="#tab_l3" data-toggle="tab">ชั้น 3</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_l1">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
            </p>
        </div>
        <div class="tab-pane" id="tab_l2">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
            </p>
        </div>
        <div class="tab-pane" id="tab_l3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
            </p>
        </div>
    </div>
</div>
<?php
    $this->endWidget();
?>