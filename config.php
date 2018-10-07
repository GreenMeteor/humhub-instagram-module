<?php

namespace humhub\modules\instagram;

return [
    'id' => 'instagram',
    'class' => 'humhub\modules\instagram\Module',
    'namespace' => 'humhub\modules\instagram',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\instagram\Events',
                'addInstagramFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\instagram\Events',
                'addInstagramFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\instagram\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
