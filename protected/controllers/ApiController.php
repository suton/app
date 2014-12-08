<?php
class ApiController extends Controller
{

    public function filters()
    {
        return array_merge(
            array(
                'accessControl', // perform access control for CRUD operations
            )
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated users to access all actions
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'saveImageAttachment' => 'ext.z_bodya.yii-image-attachment.ImageAttachmentAction',
            'elFinderConnector' => array(
                'class' => 'ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/uploads/',
                    'URL' => Yii::app()->baseUrl . '/uploads/',
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),

            'tinyMceCompressor' => array(
                'class' => 'TinyMceCompressorAction',
                'settings' => array(
                    'compress' => true,
                    'disk_cache' => true,
                )
            ),
            'tinyMceSpellchecker' => array(
                'class' => 'TinyMceSpellcheckerAction',
            ),
        );
    }

} 