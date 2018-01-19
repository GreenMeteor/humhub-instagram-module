<?php

namespace humhub\modules\instagram;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/instagram/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://instawidget.net';
        }
        return $url;
    }

}
