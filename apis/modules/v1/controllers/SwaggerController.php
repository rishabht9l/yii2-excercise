<?php

namespace apis\modules\v1\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * @SWG\Swagger(
 *     basePath="/",
 *     @SWG\Info(version="1.0", title="Simple API"),
 * )
 */ 
class SwaggerController extends Controller
{
    public function actions()
    {
        return [
            'docs' => [
                'class' => 'yii2mod\swagger\SwaggerUIRenderer',
                'restUrl' => Url::to(['swagger/api']),
            ],
            'api' => [
                'class' => 'yii2mod\swagger\OpenAPIRenderer',
                // Тhe list of directories that contains the swagger annotations.
                'scanDir' => [
                  Yii::getAlias("@app/modules/v1/controllers"),
                  Yii::getAlias("@app/modules/v1/models")
                ],
                'cache' => 'cache',
                'cacheKey' => 'excercise-test',
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}