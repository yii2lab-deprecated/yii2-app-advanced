<?php

use yii2lab\app\helpers\Db;

return [
	'name' => 'Salempay',
	'language' => 'ru-RU', // current Language
	'sourceLanguage' => 'xx-XX', // Language development
	'bootstrap' => ['log', 'lng', 'queue'],
	'timeZone' => 'UTC',
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'components' => [
		'user' => [
			'class' => 'yii2woop\account\domain\web\User',
			//'identityClass' => 'yii2lab\user\models\identity\Db',
		],
		'httpClient' => [
			'class' => 'yii\httpclient\Client',
		],
		'log' => [
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
					'except' => [
						'yii\web\HttpException:*',
						YII_ENV_TEST ? 'yii\i18n\PhpMessageSource::loadMessages' : null,
					],
				],
			],
			'traceLevel' => YII_DEBUG ? 3 : 0,
		],
		'authManager' => [
			'class' => 'yii2lab\rbac\rbac\PhpManager',
			'itemFile' => '@common/data/rbac/items.php',
			'ruleFile' => '@common/data/rbac/rules.php',
			'defaultRoles' => ['rGuest'],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'i18n' => [
			'translations' => [
				'*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'forceTranslation' => true,
					'basePath' => '@common/messages',
					'sourceLanguage' => 'xx-XX',
				],
			],
		],
		'lng' => [
			'class' => 'yii2module\lang\domain\components\LngComponent',
			'store' => [
				'class' => 'yii2module\lang\domain\drivers\store\Cookies',
				'key' => 'language',
				'extra' => [
					'expireDays' => 30,
					'cookieDomain' => '',
				],
			],
			'languages' => include(COMMON_DATA_DIR . DS . 'languages.php'),
		],
		'db' => Db::getConfig([
			'class' => 'yii\db\Connection',
			'charset' => 'utf8',
			'enableSchemaCache' => YII_ENV == 'prod',
			/*
			'enableSchemaCache' => true,
			'schemaCacheDuration' => 3600,
			'schemaCache' => 'cache',
			*/
		], YII_ENV_TEST ? 'test' : 'main'),
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => YII_DEBUG,
			'fileTransportPath' => '@common/runtime/mail',
		],
		'queue' => [
			'class' => \yii\queue\file\Queue::class,
			'path' => '@common/runtime/queue',
		],
	],
];
