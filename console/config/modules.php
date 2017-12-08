<?php

return [
	'modules' => [
		//'util' => 'yii2my\util\Module', // "yii2my/yii2-util": "0.*",
		'offline' => 'yii2module\offline\console\Module',
		'rbac' => 'yii2module\rbac\console\Module',
		'cleaner' => 'yii2module\cleaner\console\Module',
		'environments' => 'yii2module\environments\Module',
		'fixtures' => 'yii2module\fixture\Module',
		'test' => 'yii2module\test\Module',
	],
	'controllerMap' => [
		'migrate' => [
			'class' => 'dee\console\MigrateController',
			'migrationPath' => '@console/migrations',
			'generatorTemplateFiles' => [
				'create_table' => '@yii2lab/migration/yii/views/createTableMigration.php',
			],
		],
	],
];
