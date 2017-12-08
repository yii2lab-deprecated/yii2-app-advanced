<?php

use yii\helpers\Html;
use yii2module\article\widgets\PostList;

?>

<div class="pull-left">
	<p>
	&copy; <?= Yii::$app->name . SPC . date('Y') ?>


		<?php if(YII_ENV_DEV) { ?>
			<!--
			<span class="text-muted"> | </span>
			<?= Html::a(t('main', 'documentation'), param('url.frontend') . 'doc') ?>
			-->

			<?php if(config("modules.gii") && Yii::$app->user->can('backend.*')) { ?>
				<span class="text-muted"> | </span>
				<?= Html::a('Gii', ['/gii']) ?>
			<?php } ?>

			<?php if(!in_array('debug', config('bootstrap'))) { ?>
                <span class="text-muted"> | </span>
				<?= Html::a('Yii Debugger', ['/debug/default/view', 'panel' => 'request']) ?>
			<?php } ?>
   
		<?php } ?>

		<?php if(APP == FRONTEND) { ?>

			<?php if(Yii::$app->user->can('backend.*')) { ?>
				<span class="text-muted"> | </span>
				<?= Html::a(t('main', 'go_to_backend'), param('url.backend')) ?>
			<?php } ?>

		<?php } ?>

	</p>

</div>

<div class="pull-right">

	<?php if(config('modules.lang')) { ?>
		<i class="fa fa-language" title="<?= t('lang/main', 'title') ?>"></i>
		<?= $this->render('@yii2module/lang/module/views/common/selector') ?>
	<?php } ?>

	&nbsp;

	<?= Yii::powered() ?>
</div>
