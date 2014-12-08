<?php

/**
 * Description of _room_floore
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php

$baseUrl=  Yii::app()->theme->baseUrl;
 echo CHtml::link('<i class="icon-edit-sign orange bigger-150"></i>',
                                                Yii::app()->createUrl('building/editRoom',array('room_id'=>19)),
                                                array(
                                                    'ajax'=>array(
                                                        'type'=>'POST',
                                                        'url'=>"js:$(this).attr('href')",
                                                        'update'=>'#editRoom',
                                                        'cache'=>FALSE
                                                    )
                                                )
                                                );
?>

<div id="user-profile-2" class="user-profile row-fluid">
    
    <div class="tab-pane active">
        <div class="profile-users clearfix">
            <?php
            $criteria=new CDbCriteria();
            $criteria->order='id,room_code ASC';
            $room=  Room::model()->findAllByAttributes(
                    array(
                        'building_id'=>$building_id,'floor_id'=>$floor_id,
                    ),
                    $criteria
                    );
            
            ?>
            <?php foreach ($room as $eachRoom):?>
                <div class="itemdiv memberdiv">
                    <div class="inline position-relative">
                        <div class="user">
                            <a href="#">
                                <img src="<?php echo $baseUrl?>/assets/avatars/avatar4.png" alt="Bob Doe's avatar" />
                            </a>
                        </div>

                        <div class="body">
                            <div class="name">
                                <a href="#">
                                    <span class="user-status status-online"></span>
                                    <?php echo $eachRoom->room_code; //echo '|'.$building_id.'|'.$floor_id.'|';?>
                                </a>
                            </div>
                        </div>

                        <div class="popover">
                            <div class="arrow"></div>

                            <div class="popover-content">
                                <div class="bolder">Content Editor</div>

                                <div class="time">
                                        <i class="icon-time middle bigger-120 orange"></i>
                                        <span class="green"> 20 mins ago </span>
                                </div>

                                <div class="hr dotted hr-8"></div>

                                <div class="tools action-buttons">
                                    <?php
//                                        EQuickDlgs::ajaxIcon(
//                                            '',
//                                            array(
//                                                'controllerRoute' => '/building/eroom', //'member/view'
//                                                'actionParams' => array('room_id'=>$eachRoom->id), //array('id'=>$model->member->id),
//                                                'dialogTitle' => 'Detailview',
//                                                'dialogWidth' => 800,
//                                                'dialogHeight' => 600,
//                                                'openButtonText' => 'IOpen',
//                                                'closeButtonText' => 'Close',
//                                                //'openButtonHtmlOptions'=>array()
//                                            )
//                                        );
                                           
                                    ?>
                                    <?php echo CHtml::link('<i class="icon-edit-sign orange bigger-150"></i>', "",  // the link for open the dialog
                                                array(
                                                    'style'=>'cursor: pointer;',
                                                    'onclick'=>"{
                                                            addClassroom($eachRoom->id); 
                                                            $('#dialogClassroom').dialog(opt).dialog('open');
                                                            //$('#dialogClassroom div.divForForm').style.cssText ='display:none';
                                                        }"));
                                    ?>
                                    <?php
                                    $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
                                        'id'=>'dialogClassroom',
                                        'options'=>array(
                                            'autoOpen'=>FALSE
                                        )
                                    ));?>
                                    <div class="divForForm"></div>
                                    <?php $this->endWidget();?>
                                     
                                    <a href="http://www.msu.ac.th">
                                        <i class="icon-facebook-sign blue bigger-150"></i>
                                    </a>

                                    <a href="#" onclick="document.location.href='http://www.msu.ac.th'">
                                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                                    </a>

                                    <a href="#">
                                        <i class="icon-trash red bigger-150"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div><!--/#friends-->
</div>



<script type="text/javascript">
    var opt = {
        autoOpen: false,
        modal: true,
        width: 300,
        height:200,
        title: 'Edit Room'
    };

// here is the magic
function addClassroom(num)
{
            var _url;
            _url='<?php echo Yii::app()->createUrl('building/editroom')?>?room_id='+num;
             jQuery.ajax({
                url: _url,
                dataType:'json',
                type:'POST',
                success:function(data)
                        {
                                if (data.status == 'failure')
                                {
                                        $('#dialogClassroom div.divForForm').html(data.div);
                                        // Here is the trick: on submit-> once again this function!
                                        $('#dialogClassroom div.divForForm form #editRoom').submit();
                                }
                                else
                                {
                                        $('#dialogClassroom div.divForForm').html(data.div);
                                        setTimeout("$('#dialogClassroom').dialog('close')",3000);
                                }

                        } ,
                cache:false});
    <?php 
//    echo CHtml::ajax(array(
//            'url'=>array('building/editroom','room_id'=>19),
//            'data'=> "js:$(this).serialize()",
//            'type'=>'post',
//            'dataType'=>'json',
//            'success'=>"function(data,num)
//            {
//                
//                if (data.status == 'failure')
//                {
//                    $('#dialogClassroom div.divForForm').html(data.div);
//                          // Here is the trick: on submit-> once again this function!
//                    $('#dialogClassroom div.divForForm form').submit(addClassroom);
//                }
//                else
//                {
//                    $('#dialogClassroom div.divForForm').html(data.div);
//                    setTimeout(\"$('#dialogClassroom').dialog('close') \",3000);
//                }
// 
//            } ",
//            ))
            
            ?>;
    return false; 
 
}
 
</script>