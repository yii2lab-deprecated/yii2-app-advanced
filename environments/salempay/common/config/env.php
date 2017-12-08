<?php

return [
	'YII_DEBUG' => YII_DEBUG_PLACEHOLDER,
	'YII_ENV' => 'YII_ENV_PLACEHOLDER',
	'project' => 'salempay',
	'url' => [
		'frontend' => 'http://FRONTEND_DOMAIN_PLACEHOLDER/',
		'backend' => 'http://BACKEND_DOMAIN_PLACEHOLDER/',
		'api' => 'http://API_DOMAIN_PLACEHOLDER/',
	],
	'cookieValidationKey' => [
		'frontend' => 'FRONTEND_COOKIE_VALIDATION_KEY_PLACEHOLDER',
		'backend' => 'BACKEND_COOKIE_VALIDATION_KEY_PLACEHOLDER',
	],
	'connection' => [
		'main' => [
			'driver' => 'DRIVER_DB_PLACEHOLDER',
			'host' => 'HOST_DB_PLACEHOLDER',
			'username' => 'USERNAME_DB_PLACEHOLDER',
			'password' => 'PASSWORD_DB_PLACEHOLDER',
			'dbname' => 'DBNAME_DB_PLACEHOLDER',
			'defaultSchema' => 'DEFAULTSCHEMA_DB_PLACEHOLDER',
		],
		'test' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname' => 'DBNAME_DB_PLACEHOLDER_test',
		],
	],
	'servers' => [
		'core' => [
			'domain' => 'http://CORE_DOMAIN_PLACEHOLDER/',
		],
		'static' => [
			'domain' => 'http://STATIC_DOMAIN_PLACEHOLDER/',
			'publicPath' => '@frontend/web/',
			/*'connection' => [
				'address' => '192.168.8.10',
				'port' => '22',
				'username' => 'static',
				'password' => '',
				'publicKey' => dirname(__FILE__) . '/../../../keys/static.pub',
				'privateKey' => dirname(__FILE__) . '/../../../keys/static.ppk',
			],*/
		],
	],
	'config' => [
		'map' => [
			[
				'name' => 'services',
				'merge' => true,
				'withLocal' => true,
				'onlyApps' => ['common'],
			],
		],
	],
	'remote' => [
		'driver' => 'core',
	],
];
