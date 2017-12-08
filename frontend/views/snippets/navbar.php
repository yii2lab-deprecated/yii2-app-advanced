<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii2lab\helpers\MenuHelper;

NavBar::begin([
	'brandLabel' => Yii::$app->name,
	'brandUrl' => param('url.frontend'),
	'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
	],
]);

$menu = include(COMMON_DATA_DIR . DS . 'menu' . DS . 'navbar_frontend.php');

echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => MenuHelper::gen($menu['rightMenu']),
]);

echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-left'],
	'items' => MenuHelper::gen($menu['mainMenu']),
]);

NavBar::end();
?>
