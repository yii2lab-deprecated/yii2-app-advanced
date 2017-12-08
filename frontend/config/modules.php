<?php

use yii2lab\app\helpers\Config;

return [
	'modules' => [
		'error' => [
			'class' => 'yii2module\error\Module',
		],
		'user' => [
			'class' => 'common\modules\user\Module',
		],
		'welcome' => [
			'class' => 'frontend\modules\welcome\Module',
		],
		'guide' => [
			'class' => 'yii2module\guide\module\Module',
		],
		'article' => [
			'class' => 'yii2module\article\web\Module',
		],
		'rest-v5' => [
			'class' => 'yii2module\rest_client\Module',
			'baseUrl' => env('url.api') . 'v5',
			'as access' => Config::genAccess('rest-client.*'),
		],
		'rest-v4' => [
			'class' => 'yii2module\rest_client\Module',
			'baseUrl' => env('url.api') . 'v4',
			'as access' => Config::genAccess('rest-client.*'),
		],
	],
];
