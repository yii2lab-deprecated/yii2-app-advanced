<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/app/main.css',
	];
	public $js = [
		'js/scripts.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapThemeAsset',
		'common\assets\FontAwesomeAsset',
		'yii2lab\ubuntu_font\assets\UbuntuAsset',
	];
}
