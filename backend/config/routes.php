<?php

return [
    '/' => 'site/index',
    '/<action>' => 'site/<action>',
    //'login' => 'user/security/login',
    '/<module:\w+>/<action:\w+>' => '<module>/<action>',


    /*
        '/details/<id:\d+>/<name:\w+>' => 'site/details',
        '/page/<id:\d+>/<name:\w+>' => 'site/pages',

        '/documents/<id:\d+>' => 'site/documents',
        '/thanks' => 'site/thanks',
        '/listing' => 'site/listing',
        '/access' => 'site/outline',

        // support controls
        '/<lang:\w+>/backoffice/ajax/remove' => 'ajax/remove',

        '/backoffice/ajax/remove' => 'ajax/remove',
        '/backoffice/ajax/roompic' => 'ajax/roompic',
        '/<lang:\w+>/backoffice/ajax/roompic' => 'ajax/roompic',

        '/ajax/remove' => 'ajax/remove',
        '/ajax/roompic' => 'ajax/roompic',
    */
];
