<?php 

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'Excercise-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log',
        [
            'class' => 'yii\filters\ContentNegotiator',
        ]
    ],
    'modules' => [
        'v1' => [
            'basePath' => dirname(__DIR__).'/modules/v1',
            'class' => 'apis\modules\v1\Module'
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'SVnVkT24CuHMpvpvZkiANzL6jR8xSNb0',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
            'loginUrl' => null
        ],
//        'response' => [
//            'format' => yii\web\Response::FORMAT_JSON,
//            'charset' => 'UTF-8'
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/logs/404.log',
                ],
            ],
        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                //['class' => 'api\components\ApiUrlRule'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'excercise'],
            ],
        ],
    ],
    'params' => $params,
];
