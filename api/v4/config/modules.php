<?php

use yii2woop\service\api\v1\controllers\CategoryController;
use yii2woop\service\api\v1\controllers\FavoriteController;
use yii2woop\service\api\v1\controllers\ServiceController;

return [
	'modules' => [
		'notify' => [
			'class' => 'api\v4\modules\notify\Module',
		],
		'account' => [
			'class' => 'yii2woop\account\api\Module',
		],
		'article' => [
			'class' => 'yii2module\article\api\Module',
		],
	],
	'components' => [
		'urlManager' => [
			'rules' => [
				
				// ----------------- User module -----------------
				
				'GET v4/auth' => 'account/auth/info',
				'POST v4/auth' => 'account/auth/login',
				'v4/auth/pseudo' => 'account/auth/pseudo',
				
				'v4/registration/<action:(create-account|activate-account|set-password)>' => 'account/registration/<action>',

				'v4/auth/restore-password/<action:(request|check-code|confirm)>' => 'account/restore-password/<action>',

				'v4/security/<action:(password|email)>' => 'account/security/<action>',
				
				// ----------------- Notify module -----------------
				
				[
					'class' => 'yii\rest\UrlRule',
					'controller' => ['v4/notify' => 'notify/transport'],
					'extraPatterns' => [
						'DELETE' => 'delete-all',
					],
				],
				
				// ----------------- article module -----------------

				['class' => 'yii\rest\UrlRule', 'controller' => ['v4/article' => 'article/post']],

			],
		],
	],
];
