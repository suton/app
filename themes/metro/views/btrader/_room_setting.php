<?php

/**
 * Description of _room_setting
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$cor=  Corporation::model()->findByAttributes(array('owner_id'=>  Yii::app()->session["id"]));
$modelBuilding=$building->findAllByAttributes(array('corporate_id'=> $cor->id));
//foreach ($modelBuilding as $row){
//    echo $row->name;
//    
//    foreach ($row->floor as $r) {
//        echo $r->floor_name;
//        echo "</br>";
//    }
//    echo "</br>";
//    
//
//}
?>
<div id="addFloorDlg" style="display: none"></div>
<div id="editFloorDlg" style="display: none"></div>
<div id="addRoom" style="display: none"></div>
<div id="editRoom" style="display: none"></div>
<div class="row-fluid">
    <div class="span12">
        <h3 class="header smaller lighter blue">สร้างห้องพักในแต่ละชั้นของอาคาร</h3>

        <div id="accordion2" class="accordion">
            <?php foreach ($modelBuilding as $row):?>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a href="#<?php echo $row->id?>" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                            <?php echo $row->name;?>
                        </a>
                    </div>

                    <div class="accordion-body collapse" id="<?php echo $row->id?>">
                        <div class="accordion-inner">
                            <div class="span2"><!--/span action button-->
                                <p>
                                    <?php echo CHtml::link('<button class="btn btn-mini btn-success">
                                                                <i class="icon-bolt"></i>
                                                                สร้างชั้น
                                                                <i class="icon-arrow-right  icon-on-right"></i>
                                                            </button>',
                                                            array('/Building/addFloor','building_id'=>$row->id),
                                                            array(
                                                                'ajax'=>array(
                                                                    'type'=>'POST',
                                                                    'url'=>"js:$(this).attr('href')",
                                                                    'update'=>'#addFloorDlg',
                                                                    'cache'=>FALSE
                                                                )
                                                            ));?>
                                </p>
                            </div>
                            
                            <div class="span10"><!--/span class-->
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs" id="myTab3">
                                        <?php foreach($row->floor as $key =>$floor): ?>
                                        <li class="<?php echo (($key=='0')?'active':'');?>">
                                            <a data-toggle="tab" href="#<?php echo $floor->floor_id;?>">
                                                <!--<i class="pink icon-dashboard bigger-110"></i>-->
                                                <?php echo $floor->floor_name;?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <div class="tab-content">
                                        
                                        <?php foreach($row->floor as $key => $floor): ?>
                                            <div id="<?php echo $floor->floor_id ?>" class="tab-pane <?php echo (($key==0)?'in active':'');?>">
                                                <?php //echo $row->name.$row->id.'key['.$key.']'.$floor->floor_name; ?>
                                                <!--action button in each floor-->
                                                    <button class="btn btn-mini btn-success">
                                                        ตัวช่วยสร้างห้อง
                                                        <i class="icon-arrow-right  icon-on-right"></i>
                                                    </button>
                                                
                                                    <?php
                                                        echo CHtml::link('<button class="btn btn-mini btn-success">
                                                                            สร้างห้อง
                                                                            <i class="icon-arrow-right  icon-on-right"></i>
                                                                        </button>',
                                                                        array('building/addRoom','building_id'=>$row->id,'floor_id'=>$floor->floor_id),
                                                                        array(
                                                                            'ajax'=>array(
                                                                                'type'=>'POST',
                                                                                'url'=>"js:$(this).attr('href')",
                                                                                'update'=>'#addRoom',
                                                                                'cache'=>FALSE
                                                                            )
                                                                        ));
                                                    ?>
                                                    <?php
                                                        echo CHtml::link('<button class="btn btn-mini btn-warning">
                                                                                แก้ไขชื่อชั้น
                                                                                <i class="icon-arrow-right  icon-on-right"></i>
                                                                            </button>',
                                                                            array('Building/EditFloor','floor_id'=>$floor->floor_id,'asDialog'=>1),
                                                                            array(
                                                                                    'ajax'=>array(
                                                                                        'type'=>'POST',
                                                                                        'url'=>"js:$(this).attr('href')",
                                                                                        'update'=>'#editFloorDlg',
                                                                                        'cache'=>FALSE
                                                                                    )
                                                                                ));
                                                    ?>
                                                    <?php
                                                        echo CHtml::link('<button class="btn btn-mini btn-danger">
                                                                            ลบชั้นนี้ทิ้ง
                                                                            <i class="icon-arrow-right  icon-on-right"></i>
                                                                            </button>',
                                                                            array('Building/deleteFloor','floor_id'=>$floor->floor_id),
                                                                            array('confirm'=>'คุณต้องการลบข้อมูลทั้งชั้นจริงหรือไม่'));
                                                    ?>
                                                <!--end action button in each floor-->
                                                <?php
                                                    $this->renderPartial('/btrader/_room_floor',array('building_id'=>$row->id,'floor_id'=>$floor->floor_id));
                                                ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div><!--/span class-->
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div><!--/span-->
    
</div><!--/row-->
