<?php

namespace api\v4\modules\notify\controllers;

use Yii;
use yii2lab\domain\rest\ActiveControllerWithQuery as Controller;

class TransportController extends Controller
{

	public function format() {
		return [
			'created_at' => 'time:api',
		];
	}

	public $serviceName = 'notify.transport';
	
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'authenticator' => [
				'class' => 'yii2woop\account\domain\filters\auth\HttpTokenAuth',
			],
			'access' => [
				'class' => 'yii\filters\AccessControl',
				'rules' => [
					[
						'allow' => true,
						'roles' => ['notify.transport.manage'],
					],
				],
			],
		];
	}

	public function actions() {
		$actions = parent::actions();
		$actions['delete-all'] = [
			'class' => 'yii2lab\domain\rest\UniAction',
			'successStatusCode' => 204,
			'serviceMethod' => 'deleteAll',
		];
		return $actions;
	}
	
}
