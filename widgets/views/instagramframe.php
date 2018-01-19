<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\instagram\Assets::register($this);
?>

<div class="panel panel-default panel-instagram" id="panel-instagram">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-instagram']); ?>
  <div class="panel-heading">
    <?=Yii::t('InstagramModule.base', '<strong>Instagram</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a href="<?= $instagramUrl ?>" id="link-a95ea422a31148659ed6f1ea83ea84720e7942fc7b4f4811f88505372a865bbe"></a>
<script src="https://instawidget.net/js/instawidget.js?u=a95ea422a31148659ed6f1ea83ea84720e7942fc7b4f4811f88505372a865bbe&width=300px"></script>
<?= Html::endTag('div'); ?>
</div>
</div>
