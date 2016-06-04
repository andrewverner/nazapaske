<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'theme' => 'nazapaske',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
    'language' => 'ru',
    //'locale' => 'ru_RU',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'cos45sqrt22',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','109.195.227.18','93.90.82.178','::1'),
		),

	),

	// application components
	'components'=>array(

        'mailer' => array(
            'class' => 'application.components.Emailer',
        ),

        'w' => array(
            'class' => 'application.components.WaterMark',
        ),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

        'bread' => array(
            'class' => 'application.components.BreadCrumbs',
        ),

		'yiimailer' => array(
			'class' => 'application.extensions.yiimailer.YiiMailer'
		),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
                'backend/producer/<type:\w+>' => 'backend/producer',
                'backend/disks/<id:\d+>' => 'backend/disks',
                'backend/disk/<id:\d+>' => 'backend/disk',
                'backend/tires/<id:\d+>' => 'backend/tires',
                'backend/tire/<id:\d+>' => 'backend/tire',

                #'disk/<producer:\w+>/<model:\w+>' => 'disk/newDetails',
			    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                //'disk/details/<id:\d+>' => 'disk/details',
                'disk/details/<id:\d+>/<width>/<diameter>/<mounting_holes>/<mounting_holes_diameter>/<outreach>' => 'disk/details',
                'disk/producer/<id:\d+>' => 'disk/producer',
                'disk/model/<id:\w+>' => 'disk/model',
                'disk/info/<producer:[0-9a-zA-Zа-яА-Я_\-]+>/<name:[0-9a-zA-Zа-яА-Я_\-]+>' => 'disk/info',
                'tire/details/<id:\d+>/<width:\w+>/<diameter:\w+>/<shape:\w+>/<season:\w+>/<studding:\w+>' => 'tire/details',
                'tire/producer/<id:\d+>' => 'tire/producer',
                'page/page/<alias:\w+>' => 'page/page',
                'cart/removeDisk/<id:\d+>' => 'cart/removeDisk',
                'cart/removeTire/<id:\d+>' => 'cart/removeTire',

                'disk/show/<producer:\w+>/<model:\w+>' => 'disk/show',

                'backend/block/<id:\d+>' => 'backend/block',
                'backend/dropBlock/<id:\d+>' => 'backend/dropBlock',

                'backend/menuItem/<id:\d+>' => 'backend/menuItem',
                'backend/dropMenuItem/<id:\d+>' => 'backend/dropMenuItem',

                'backend/meta/<id:\d+>' => 'backend/meta',
                'backend/dropMeta/<id:\d+>' => 'backend/dropMeta',

                'backend/order/<id:\d+>' => 'backend/order',
                'backend/dropOrder/<id:\d+>' => 'backend/dropOrder',

				'backend/upload/<type:\w+>' => 'backend/upload',
			),
		),


		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

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
	),
);
