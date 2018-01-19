<?php
namespace humhub\modules\instagram;

use Yii;
use yii\helpers\Url;
use humhub\modules\instagram\widgets\InstagramFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('InstagramModule.base', 'Instagram Settings'),
            'url' => Url::toRoute('/instagram/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-instagram"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'instagram' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addInstagramFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(InstagramFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'instagram')
        ]);
    }
}
