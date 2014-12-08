<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
        'timeZone' => 'Asia/Bangkok',
        'language'=>'th',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
        // preloading 'bootstrap' component
	'preload'=>array(
                'log',
                //'bootstrap'
            ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.rights.*',
                'application.modules.rights.components.*',
                'ext.fileimagearbehavior.*',
                'ext.galleryManager.*',
                'ext.galleryManager.models.*',
                'ext.image.*',
            
                'ext.z_bodya.yii-image.*',
                'ext.z_bodya.yii-gallery-manager.*',
                'ext.z_bodya.yii-image-attachment.*',
                'ext.z_bodya.yii-gallery-manager.models.*',
                'ext.z_bodya.yii-tinymce.*',
                'ext.z_bodya.yii-elfinder.*',
                
                'ext.quickdlgs.*',
	),
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'root',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                            'bootstrap.gii'
                        ),
		),
                //สามารถกำหนดค่า superuser ได้ที่ RightsModule.php
                'rights'=>array(
                        'install'=>FALSE,      // Enables the installer.
                        'userClass'=>'Usertable',
                        'userNameColumn'=>'username',
                        'userIdColumn'=>'id',
                        'appLayout'=>'//layouts/main',
                        'baseUrl'=>'/rights',
                        //'defaultRoles'=>array('Guest'), 
                ),
               
	),

	// application components
	'components'=>array(
                'clientScript' => array(//for registerCssFile width ie browser
                    'class' => 'ext.yii-EClientScript.EClientScript',
                    'combineScriptFiles' => !YII_DEBUG, // By default this is set to true, set this to true if you'd like to combine the script files
                    'combineCssFiles' => !YII_DEBUG, // By default this is set to true, set this to true if you'd like to combine the css files
                    'optimizeScriptFiles' => !YII_DEBUG, // @since: 1.1
                    'optimizeCssFiles' => !YII_DEBUG, // @since: 1.1
                    'optimizeInlineScript' => false, // @since: 1.6, This may case response slower
                    'optimizeInlineCss' => false, // @since: 1.6, This may case response slower
                ),
                'image' => array(
                    'class' => 'CImageComponent',
                    'driver' => 'GD',
                ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class' => 'RWebUser', // Allows super users access implicitly.
		),
                'authManager' => array(
                    'class' => 'RDbAuthManager',// Provides support authorization item sorting.
                ),
                //config bootstrap components
//                'bootstrap' => array(
//                    'class' => 'ext.bootstrap.components.Bootstrap',
//                    'responsiveCss' => true,
//                ),

                'controllMap'=>array(
                        'gallery' => array(
                            'class' => 'ext.galleryManager.GalleryController',
                            'pageTitle'=>'Gallery administration',
                        ),
                ),
                'widgetFactory' => array(
                        'class' => 'CWidgetFactory',
                        'widgets' => array(
                            'GalleryManager'=>array(
                                'controllerRoute' => '/test/g',
                                  //'controllerRoute' => '/gallery',
                            ) ,
                        )
                ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
                        'showScriptName'=>false,
		),
            
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=mkapmt',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
                'googleApiKey' => 'AIzaSyBulUgOWk3ghU--zu1s5hXFaYtbH3bv620',
	),
);