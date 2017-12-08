<?php

return [
	'bootstrap' => [],
	'components' => [
		'user' => [
			//'identityClass' => 'yii2lab\user\models\identity\Disc',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
			'loginUrl'=>['user/auth/login'],
		],
		'request' => [
			'csrfParam' => '_csrf-frontend',
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			],
			'cookieValidationKey' => env('cookieValidationKey.frontend'),
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'errorHandler' => [
			'errorAction' => 'error/error/error',
		],
		
		'urlManager' => [
			'rules' => [
				''=> 'welcome',
				// ----------------- article module -----------------

				'article/<id>'=> 'article/page/view',

				// ----------------- guide module -----------------

				'guide/<project_id>/chapter/<id>'=> 'guide/chapter/view',
				'guide/<project_id>/<id>/update'=> 'guide/article/update',
				'guide/<project_id>/<id>/delete'=> 'guide/article/delete',
				'guide/<project_id>/<id>/code'=> 'guide/article/code',
				'guide/<project_id>/<id>'=> 'guide/article/view',
				'guide/<project_id>'=> 'guide/article',
			],
		],
	],
];
