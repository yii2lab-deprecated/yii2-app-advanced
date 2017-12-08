<?php

return [
	'bootstrap' => [],
	'layout' => '@yii2lab/misc/backend/views/layouts/main',
	'components' => [
		'user' => [
			//'identityClass' => 'yii2lab\user\models\identity\Disc',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
			'loginUrl'=>['user/auth/login'],
		],
		'request' => [
			'csrfParam' => '_csrf-backend',
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			],
			'cookieValidationKey' => env('cookieValidationKey.backend'),
		],
		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'advanced-backend',
		],
		'errorHandler' => [
			'errorAction' => 'error/error/error',
		],
		
		'urlManager' => [
			'rules' => [
				''=> 'dashboard',
				
				// ----------------- Active module -----------------
				
				['class' => 'yii\rest\UrlRule', 'controller' => ['active' => 'active/type']],
				
				'active/<action>' => 'active/type/<action>',
				
				// ----------------- Bank module -----------------
				
				['class' => 'yii\rest\UrlRule', 'controller' => ['bank' => 'bank/main']],
				
				'bank/<action>' => 'bank/main/<action>',
				
				// ----------------- Personal module -----------------
				
				['class' => 'yii\rest\UrlRule', 'controller' => ['bonus' => 'personal/bonus']],
				
				'bonus/<action>' => 'personal/bonus/<action>',
			],
		],
	],
];
