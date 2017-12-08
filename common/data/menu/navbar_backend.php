<?php

return [
	'mainMenu' => [
		[
			'label' => ['admin', 'main'],
			'isHeader' => true,
		],
		[
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'square-o',
			'module' => 'article',
			'access' => 'article.post.manage',
		],
		[
			'label' => ['active/main', 'title'],
			'url' => 'active',
			'icon' => 'square-o',
			'module' => 'active',
		],
		[
			'label' => ['bank/main', 'title'],
			'url' => 'bank',
			'icon' => 'square-o',
			'module' => 'bank',
		],
		[
			'label' => ['personal/bonus', 'title'],
			'url' => 'bonus',
			'icon' => 'square-o',
			'module' => 'personal',
		],
		[
			'label' => ['admin', 'system'],
			'isHeader' => true,
		],
		[
			'label' => ['admin', 'app'],
			'icon' => 'square-o',
			'items' => [
				[
					'label' => ['offline/main', 'title'],
					'url' => 'offline',
					'access' => 'offline.manage',
				],
				[
					'label' => ['cleaner/cache', 'title'],
					'url' => 'cleaner/cache',
					'access' => 'cleaner.manage',
				],
				[
					'label' => ['lang/manage', 'title'],
					'url' => 'lang/manage',
					'access' => 'lang.manage',
				],
				[
					'label' => ['notify/cron', 'title'],
					'url' => 'notify/cron',
					'access' => 'notify.manage',
				],
			],
		],
		[
			'module' => 'app',
			'class' => 'yii2lab\app\admin\helpers\Navigation',
			'access' => 'app.config',
		],
		[
			'label' => ['admin', 'rbac'],
			'icon' => 'users',
			'module' => 'rbac',
			'access' => 'rbac.manage',
			'items' => [
				[
					'label' => ['admin', 'rbac_permission'],
					'url' => 'rbac/permission',
				],
				[
					'label' => ['admin', 'rbac_role'],
					'url' => 'rbac/role',
				],
				[
					'label' => ['admin', 'rbac_rule'],
					'url' => 'rbac/rule',
				],
				[
					'label' => ['admin', 'rbac_assignment'],
					'url' => 'rbac/assignment',
				],
			],
		],
		[
			'label' => ['admin', 'develop'],
			'isHeader' => true,
		],
		[
			'label' => ['admin', 'logreader'],
			'icon' => 'database',
			'url' => 'logreader',
			'module' => 'logreader',
			'access' => 'logreader.manage',
		],
		[
			'label' => ['admin', 'gii'],
			'icon' => 'flask',
			'url' => 'gii',
			'access' => 'gii.manage',
		],
		[
			'label' => ['github/main', 'title'],
			'icon' => 'github',
			'module' => 'github',
			'items' => [
				[
					'label' => ['github/origin', 'title'],
					'url' => 'github/origin',
				],
				[
					'label' => ['github/local', 'title'],
					'url' => 'github/local',
				],
			],
			'access' => 'github.manage',
		],
	],
];