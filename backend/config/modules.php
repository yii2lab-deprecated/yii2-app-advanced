<?php

use yii2lab\app\helpers\Config;

$access = Config::genAccess('backend.*');

return [
	'modules' => [
		'error' => [
			'class' => 'yii2module\error\Module',
		],
		'user' => [
			'class' => 'common\modules\user\Module',
			'controllerMap' => [
				'auth' => [
					'class' => 'common\modules\user\controllers\AuthController',
					'layout' => '@yii2lab/misc/backend/views/layouts/singleForm.php',
				],
			],
		],
		'dashboard' => [
			'class' => 'backend\modules\dashboard\Module',
			'as access' => $access,
		],
		'notify' => [
			'class' => 'yii2lab\notify\admin\Module',
			'as access' => Config::genAccess('notify.manage'),
		],
		'cleaner' => [
			'class' => 'yii2module\cleaner\admin\Module',
			'as access' => Config::genAccess('cleaner.manage'),
		],
		'rbac' => [
			'class' => 'mdm\admin\Module',
			'controllerMap' => [
				'assignment' => [
					'class' => 'yii2lab\rbac\admin\controllers\AssignmentController',
					'userClassName' => 'yii2woop\account\domain\models\User',
					'usernameField' => 'login',
				],
			],
			'as access' => Config::genAccess('rbac.manage'),
		],
		'gridview' => [
			'class' => 'kartik\grid\Module'
		],
		'logreader' => [
            'class' => 'zhuravljov\yii\logreader\Module',
            'aliases' => [
                'Frontend' => '@frontend/runtime/logs/app.log',
                'Backend' => '@backend/runtime/logs/app.log',
                'Console' => '@console/runtime/logs/app.log',
				'Api' => '@api/runtime/logs/app.log',
            ],
			'as access' => Config::genAccess('logreader.manage'),
        ],
		'offline' => [
			'class' => 'yii2module\offline\admin\Module',
			'as access' => Config::genAccess('offline.manage'),
		],
		'github' => [
			'class' => 'yii2module\github\admin\Module',
			'as access' => Config::genAccess('github.manage'),
		],
		'app' => [
			'class' => 'yii2lab\app\admin\Module',
			'as access' => Config::genAccess('app.config'),
		],
	],
];
