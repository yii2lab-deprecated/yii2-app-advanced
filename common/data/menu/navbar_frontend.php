<?php

return [
	'mainMenu' => [
		[
			'label' => 'Rest',
			'access' => ['rest-client.*'],
			'items' => [
				[
					'label' => 'v4',
					'url' => 'rest-v4',
				],
				[
					'label' => 'v5',
					'url' => 'rest-v5',
				],
			],
		],
	],
	'rightMenu' => [
		[
			'label' => 'User',
			'module' => 'user',
			'class' => 'common\modules\user\helpers\Navigation',
		],
	],
];