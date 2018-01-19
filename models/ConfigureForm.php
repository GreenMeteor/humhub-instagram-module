<?php

namespace humhub\modules\instagram\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('InstagramModule.base', 'Instagram URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('InstagramModule.base', 'e.g. https://instawidget.net/v/user/{username}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('instagram')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('instagram')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
