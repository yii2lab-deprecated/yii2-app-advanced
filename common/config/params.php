<?php

return [
	'MaintenanceMode' => false,
	'pageSize' => 25,
	'user.passwordResetTokenExpire' => 60,
	'user.registration.tempLoginExpire' => 20 * 60,
	'user.auth.rememberExpire' => 3600 * 24 * 30,
	'user.login.mask' => '+9 (999) 999-99-99',
	'url' => env('url'),
	'dee.migration.path' => [
		'@vendor/yii2module/yii2-rest-client/src/migrations',
		'@vendor/yii2module/yii2-article/src/domain/migrations',
		'@vendor/yii2lab/yii2-notify/src/migrations',
		'@vendor/yii2lab/yii2-qr/src/migrations',
		'@vendor/yii2woop/yii2-account/src/domain/migrations',
		'@vendor/yii2woop/yii2-service/src/domain/v1/migrations',
		'@vendor/yii2lab/yii2-geo/src/domain/migrations',
	],
	'dee.migration.scan' => [
		'@domain',
	],
	'fixture' => [
		'dir' => '@common/fixtures',
		'exclude' => [
			'migration',
		],
	],
	'offline' => [
		'exclude' => [
			CONSOLE,
			BACKEND,
		],
	],
	'navbar' => [
		'exclude' => [
			'error',
			'offline',
			'user',
			'debug',
			'gii',
			'welcome',
			'lang',
		],
	],
	'static' => [
		'path' => [
			'avatar' => 'images/avatars',
			'provider' => 'images/provider',
			'qr' => 'images/qr',
		],
	],
	'servers' => env('servers'),
	'MRP' => 2121,
	'EPAY_PERCENT' => 2,
	'EpayPath' => dirname(__FILE__) . '/../../../epay_test/',
	'CnpPath' => dirname(__FILE__) . '/../../../cnp_test/',
	'WooppayPath' => dirname(__FILE__) . '/../../../wp_test/',
	'AcquiringTest' => true,
	'AcquiringType' => 'wooppay',
	'AcquiringAccess' => 70,//epay,cnp,wooppay
	'CardLinkingAccess' => true,
	'CardLinkingType' => 'wooppay',
	'WithdrawalType' => 'wooppay',
	'SPP_ORDER_NOTIFICATION' => 'support@wooppay.com',
	'SECURITY_EMAIL' => 'security@wooppay.com',
	'article' => [
		'links' => [
			'about',
			'contact',
		],
	],
];