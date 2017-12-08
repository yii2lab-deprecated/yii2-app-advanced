<?php

namespace common\modules\user\helpers;

use Yii;
use yii2lab\helpers\yii\Html;
use yii2woop\account\domain\entities\LoginEntity;

// todo: отрефакторить - сделать нормальный интерфейс и родителя

class Navigation {
	
	static function getMenu() {
		if(Yii::$app->user->isGuest) {
			return self::getGuestMenu();
		} else {
			return self::getUserMenu();
		}
	}
	
	private static function getItemList() {
		return [
			[
				'options' => ['class'=>'divider'],
			],
			[
				'label' => t('account/auth', 'logout_action'),
				'url' => 'user/auth/logout',
				'linkOptions' => ['data-method' => 'post'],
			],
		];
	}
	
	private static function getGuestMenu()
	{
		$items = [];
		$items[] = ['label' => ['account/auth', 'login_action'], 'url' => Yii::$app->user->loginUrl];
		if(APP == FRONTEND) {
			$items[] = ['label' => ['account/registration', 'title'], 'url' => 'user/registration'];
			$items[] = ['label' => ['account/password', 'title'], 'url' => 'user/password'];
		}
		return [
			'label' =>
				Html::fa('user') . NBSP .
				t('account/auth', 'title'),
			'encode' => false,
			'items' => $items,
		];
	}
	
	private static function getUserMenu()
	{
		/** @var LoginEntity $identity */
		$identity = Yii::$app->user->identity;
		if(is_object($identity->profile)) {
			$avatar = '<img src="'. $identity->profile->avatar_url . '" height="19" />';
		} else {
			$avatar = '';
		}
		$balance = '';
		$label = $avatar . NBSP . '<small>'. $identity->username . NBSP .	$balance . '</small>';
		return [
			'label' => $label,
			'encode' => false,
			'items' => self::getItemList(),
		];
	}

}
