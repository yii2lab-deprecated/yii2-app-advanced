<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2lab\navigation\domain\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use yii2lab\helpers\Page;
use yii2lab\notify\domain\widgets\Alert;

AppAsset::register($this);
?>

<?php Page::beginDraw() ?>

<div class="wrap">
    <header class="main-header">
			<?= Page::snippet('navbar');?>

    </header>
    <div class="container">
	    <?= Breadcrumbs::widget() ?>
	    <?= Alert::widget() ?>
		<?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
		<?= Page::snippet('footer', '@common') ?>
    </div>
</footer>

<?php Page::endDraw() ?>
