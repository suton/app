<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EQuickDlgs
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
EQuickDlgs::ajaxIcon(
            Yii::app()->baseUrl .'images/view.png',
            array(
                'controllerRoute' => 'update2', //'member/view'
                'actionParams' => array('id'=>46), //array('id'=>$model->member->id),
                'dialogTitle' => 'Detailview',
                'dialogWidth' => 800,
                'dialogHeight' => 600,
                'openButtonText' => 'View record',
                'closeButtonText' => 'Close',
            )
        );
?>