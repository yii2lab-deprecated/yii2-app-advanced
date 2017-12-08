<?php

use yii2lab\helpers\ApiVersionCofig;

$config = [
	'modules' => [
		'doc' => [
			'class' => 'yii2module\restapidoc\Module',
		],
		'support' => [
			'class' => 'api\v4\modules\support\Module',
		],
	],
	'components' => [
		'urlManager' => [
			'rules' => [
				'/' => 'doc',
				API_VERSION_STRING => 'doc/default/view',
			],
		],
	],
];

return ApiVersionCofig::load('modules', $config);
