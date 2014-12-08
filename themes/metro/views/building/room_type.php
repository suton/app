<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room_type
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
//http://stackoverflow.com/questions/9954292/hiding-columns-in-yii-cgridview
?>

<?php 
// expand rows
$toggleUDetails = <<<JS
 $('a.toggle').live('click',function(e){
    e.preventDefault();

    if(this.href.split('#')[1]=='loaded')return $(this).closest("tr").nextUntil('tr.fee_id').toggle();//return $(this).closest("tr").nextUntil('tr.even').toggle();

    trow=$(this).closest("tr");

    var ajaxOpts={
            type:"POST", 
            url:this.href ,
            dataType:'json',
            success:function(data){
                $(trow).after(data.row);
                
                //console.log(data);
        
                $.each(data, function(key, val) {
                    $(trow).after(val["row"]);
                });
            }
    };
    
    this.href=this.href+'#loaded';

    $.ajax(ajaxOpts);

  });
JS;
Yii::app()->clientScript->registerScript('toggleUD', $toggleUDetails, CClientScript::POS_READY); 
?>
<?php 
    echo CHtml::link('<button class="btn btn-primary"><i class="icon-plus"></i>เพิ่มประเภทห้อง</button>',
                array('/building/RoomTypeCreate'),
                array(
                    'ajax'=>array(
                        'type'=>'POST',
                        'url'=>"js:$(this).attr('href')", 
                        'update'=>'#RoomTypeCreate',
                        'cache'=>false,
                    )
                )
            );

?>
<div id="RoomTypeCreate" style="display: none"></div>

<?php 
$cor_id=  Corporation::model()->findByAttributes(array('owner_id'=>Yii::app()->user->id));
    //table room type
                $this->widget('zii.widgets.grid.CGridView',array(
                                'id'=>'roomType',
                                'dataProvider'=>$roomtype->searchRoomType($cor_id->id),
                                'itemsCssClass'=>'table table-bordered table-striped table_vam',
                                'rowHtmlOptionsExpression'=>'array("class"=>"fee_id")',
                                'columns'=>array(
                                    array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{toggle}',
                                        'buttons'=>array(
                                             'toggle'=>array(
                                                    'label'=>'',                        
                                                    'url'=>'Yii::app()->createUrl("building/getExtra", array("id"=>$data->fee_group_id))',
                                                    'options'=>array(
                                                        'class'=>'toggle icon-plus-sign',
                                                    ),
                                             ),
                                        ),

                                    ),
                                    array(
                                        'name'=>'room_type_name',
                                    ),
                                    array(
                                        'name'=>'building.name',
                                    ),
                                    array(
                                        'class'=>'CButtonColumn',
                                        'htmlOptions'=>array('style'=>'width:90px;'),
                                        'template'=>"{edit}{delete}",
                                        'buttons'=>array(
                                                'edit'=>array(
                                                    'label'=>'<button class="btn btn-mini btn-warning"><i class="icon-edit bigger-120"></i></button>',
                                                    'url'=>'$this->grid->controller->createUrl("/Building/RoomTypeEdit",array("id"=>$data->fee_group_id,"asDialog"=>1))',
                                                    'imageUrl'=>FALSE,
                                                    'options'=>array(
                                                         'title'=>'edit',
                                                         'ajax'=>array(
                                                             'type'=>'POST',
                                                             'url'=>"js:$(this).attr('href')", 
                                                             'update'=>'#id_update_roomType',
                                                             'cache'=>false,
                                                         )
                                                    )
                                                ),
                                                'delete'=>array(
                                                    'label'=>'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>',
                                                    'imageUrl'=>FALSE,
                                                    'url'=>'$this->grid->controller->createUrl("/Building/RoomTypeDelete", array("id"=>$data->fee_group_id))',
                                                    'options'=>array(
                                                        'title'=>'delete'
                                                    )
                                                ),
                                        ),
                                    ),
                                ),
                            ));
?>

<div id="id_update_roomType" style="display: none"></div>
