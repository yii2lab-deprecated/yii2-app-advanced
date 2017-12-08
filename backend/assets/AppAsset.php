<?php

namespace backend\assets;

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

	public $depends = [
		'yii\web\YiiAsset',
		'yii2lab\misc\assets\AdminLteAsset',
		'yii2lab\ubuntu_font\assets\UbuntuAsset',
	];
}
