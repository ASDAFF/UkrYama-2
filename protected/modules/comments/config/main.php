<?php

return array(
    'import' => array(
        'application.modules.comments.widgets.*',
        'application.modules.comments.components.*',
        'application.modules.comments.models.*',
    ),
    'modules' => array(
        'comments' => array(
            'userConfig' => array(
                'class' => 'UserGroup',
                'nameProperty' => 'name',
                'emailProperty' => 'email',
            ),
        ),
    ),
);
