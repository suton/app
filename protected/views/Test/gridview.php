<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gridview
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'user-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'username',
        'fname',
        'lname', 
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}',
                //--------------------- begin added --------------------------
            'buttons'=>
                array(
                    'view'=>
                        array(
                            'url'=>'Yii::app()->createUrl("test/view", array("id"=>$data->id,"asDialog"=>1))',
                            'options'=>array(  
                                'ajax'=>array(
                                        'type'=>'POST',
                                            // ajax post will use 'url' specified above 
                                        'url'=>"js:$(this).attr('href')", 
                                        'update'=>'#id_view',
                                       ),
                             ),
                        ),
                    'update'=>array(
                        'url'=>'Yii::app()->createUrl("test/update2",array("id"=>$data->id,"asDialog"=>1))',
                        'options'=>array(
                            'ajax'=>array(
                                'type'=>'POST',
                                'url'=>"js:$(this).attr('href')", 
                                'update'=>'#id_update'
                            )
                        )
                    ),

                ),
                //--------------------- end added --------------------------
        ),
       array(
            'class'=>'EJuiDlgsColumn',
            'template'=>'{view}',
                'viewDialog'=>array(
                    'controllerRoute' => 'Eqdlgview',
                    'actionParams' => array('id'=>'$data->id'),
                    'dialogWidth' => 580,
                    'dialogHeight' => 250,
                ),          
          ),
    ),
)); 
//----------- add the div below as container for the dialog -----------------------
?>
 
<div id="id_view"></div>
<div id="id_update" style="display:none;"></div>