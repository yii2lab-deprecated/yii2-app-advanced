<?php

use common\enums\rbac\RoleEnum;
use common\helpers\Driver;
use yii2lab\domain\repositories\ActiveDiscRepository;
use yii2lab\domain\services\ActiveBaseService;

$remoteServiceDriver = Driver::remote() == Driver::CORE ? Driver::CORE : null;

return [
	'components' => [
		'account' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2woop\account\domain',
			'repositories' => [
				'auth' => Driver::remote(),
				'login' => Driver::remote(),
				'authClient' => 'domain\v4\account\repositories\ar\AuthClientRepository',
				'point' => 'domain\v4\account\repositories\ar\PointRepository',
				'registration' => Driver::remote(),
				'temp' => Driver::remote(),
				'restorePassword' => Driver::remote(),
				'security' => Driver::DISC,
				'test' => Driver::DISC,
				'balance' => Driver::remote(),
				'rbac' => Driver::MEMORY,
				'confirm' => Driver::remote(),
				'assignment' =>  Driver::remote(),
			],
			'services' => [
				'auth',
				'authClient' => [
					'class' => 'domain\v4\account\services\AuthClientService',
					'smsCodeExpire' => 30,
				],
				'point' =>  'domain\v4\account\services\PointService',
				'login' => [
					'relations' => [
//						'profile' => 'profile.profile',
//						'address' => 'profile.address',
					],
//					'prefixList' => ['B', 'BS', 'R', 'QRS'],
					'defaultRole' => RoleEnum::UNKNOWN_USER,
					'defaultStatus' => 1,
				],
				'registration' => $remoteServiceDriver,
				'temp',
				'restorePassword' => $remoteServiceDriver,
				'security',
				'test',
				'balance',
				'rbac',
				'confirm',
				'assignment',
			],
		],
		'notify' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2lab\notify\domain',
			'repositories' => [
				'transport',
				'email' => Driver::MOCK,
				'sms' => Driver::MOCK,
				'flash' => Driver::SESSION,
			],
			'services' => [
				'transport',
				'email',
				'sms',
				'flash',
			],
		],
		'navigation' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2lab\navigation\domain',
			'repositories' => [
				'breadcrumbs' => Driver::MEMORY,
			],
			'services' => [
				'breadcrumbs',
			],
		],
		'app' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2lab\app\domain',
			'repositories' => [
				'mode' => Driver::DISC,
				'url' => Driver::DISC,
				'remote' => Driver::DISC,
				'connection' => Driver::DISC,
				'cookie' => Driver::DISC,
			],
			'services' => [
				'mode',
				'url',
				'remote',
				'connection',
				'cookie',
			],
		],
		'rbac' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2module\rbac\domain',
			'repositories' => [
				'rule' => Driver::FILE,
				'const' => Driver::FILE,
			],
			'services' => [
				'rule',
				'const',
			],
		],
	],
];
