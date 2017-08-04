<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
                'class' => 'mdm\admin\Module',
                'mainLayout' => '@app/views/layouts/main.php',
                'layout' => 'left-menu', // it can be '@path/to/your/layout'.
                'controllerMap' => [
                    'assignment' => [
                        'class' => 'mdm\admin\controllers\AssignmentController',
                        'userClassName' => 'common\models\User',
                        'idField' => 'user_id'
                    ],
                ],
                'menus' => [
                    'user' => null
                ]
            ],
             'user' => [
                'class' => 'backend\modules\user\Module',
            ],
        
    ],
          'homeUrl' => '/admin',
    'components' => [
        'request' => [
        'baseUrl' => '/admin',
            'csrfParam' => '_csrf-backend',
        ],
        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@app/views/admin/yiisoft/yii2-app'
             ],
         ],
    ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
       
  
     
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],

    // 'authManager'  => [
    //         'class'        => 'yii\rbac\DbManager',
    //         'defaultRoles' => ['guest'],
    //     ],

    //     'as access' => [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         'site/*',
    //         'admin/*',
    //         'some-controller/some-action',
    //         // The actions listed here will be allowed to everyone including guests.
    //         // So, 'admin/*' should not appear here in the production, of course.
    //         // But in the earlier stages of your development, you may probably want to
    //         // add a lot of actions here until you finally completed setting up rbac,
    //         // otherwise you may not even take a first step.
    //     ]
    // ],
    'params' => $params,
];
