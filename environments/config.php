<?php

return [
	'project' => [
		'Wooppay' => [
			'path' => 'wooppay',
			'setWritable' => [
				'frontend/web/images',
				'common/runtime'
			],
			'setExecutable' => [
				'yii',
				'yii_test',
			],
			'generateCookieValidationKey' => [
				'common/config/env.php',
			],
			'configureDomain' => [
				'common/config/env.php',
				'api/tests/functional.suite.yml',
				'api/v4/tests/functional.suite.yml',
				'api/v5/tests/functional.suite.yml',
			],
			'configureDb' => [
				'common/config/env.php',
			],
			'configureEnv' => [
				'common/config/env.php',
			],
		],
		'Salempay' => [
			'path' => 'salempay',
			'setWritable' => [
				'frontend/web/images',
				'common/runtime'
			],
			'setExecutable' => [
				'yii',
				'yii_test',
			],
			'generateCookieValidationKey' => [
				'common/config/env.php',
			],
			'configureDomain' => [
				'common/config/env.php',
				'api/tests/functional.suite.yml',
				'api/v4/tests/functional.suite.yml',
				'api/v5/tests/functional.suite.yml',
			],
			'configureDb' => [
				'common/config/env.php',
			],
			'configureEnv' => [
				'common/config/env.php',
			],
		],
		'Core' => [
			'path' => 'core',
			'setWritable' => [
				'frontend/web/images',
				'common/runtime'
			],
			'setExecutable' => [
				'yii',
				'yii_test',
			],
			'generateCookieValidationKey' => [
				'common/config/env.php',
			],
			'configureDomain' => [
				'common/config/env.php',
				'api/tests/functional.suite.yml',
				'api/v4/tests/functional.suite.yml',
				'api/v5/tests/functional.suite.yml',
			],
			'configureDb' => [
				'common/config/env.php',
			],
			'configureEnv' => [
				'common/config/env.php',
			],
		],
	],
	'system' => [
		'cookieValidationKeyLength' => 32,
		'placeholderMask' => '{name}_PLACEHOLDER',
	],
	'default' => [
		'domain' => [
			'base' => 'wooppay.yii',
			'core' => 'api.core.yii',
			'static' => 'wooppay.yii',
			'tps' => 'tps:8080',
		],
		'db' => [
			'driver' => 'pgsql',
			'host' => 'dbweb',
			'username' => 'logging',
			'password' => 'moneylogger',
			'dbname' => 'wooppay',
			'defaultSchema' => 'salempay',
		],
		'env' => [
			'env' => 'prod',
			'debug' => 'false',
		],
	],
	'enum' => [
		'driver' => [
			'mysql' => 'MySql',
			'pgsql' => 'Postgres',
		],
		'env' => [
			'prod' => 'Production',
			'dev' => 'Develop',
		],
		'app' => [
			'frontend',
			'backend',
			'api',
		],
	],
];
