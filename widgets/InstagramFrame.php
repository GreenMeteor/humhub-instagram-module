<?php

namespace humhub\modules\instagram\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class InstagramFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('instagram')->getServerUrl() . '/v/user';
        return $this->render('instagramframe', ['instagramUrl' => $url]);
    }
}
