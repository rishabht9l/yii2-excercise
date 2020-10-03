<?php

namespace apis\modules\v1\controllers;

use yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\ContentNegotiator;
use common\models\Router;

class RouterController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function actions()
    {
        $actions = parent::actions();
        // disable the "delete" and "create" actions
        unset($actions['index'], $actions['create'], $actions['view'], $actions['update']);
        return $actions;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'except' => [],
            'authMethods' => [
                HttpBearerAuth::className(),
            ],
        ];

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ],
        ];
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'actions' => ['list', 'index', 'create', 'view'],
                    'allow' => true,
                ],
            ],
        ];
        return $behaviors + [
                'verbs' => [
                    'class' => \yii\filters\VerbFilter::className(),
                    'actions' => [
                        'index' => ['GET'],
                        'create' => ['POST'],
                        'list' => ['GET'],
                        'update' => ['PUT']
                    ],
                ],
            ];
    }

    public function actionIndex()
    {
        $models = Router::find()->where(['status' => [Router::STATUS_ACTIVE, Router::STATUS_INACTIVE]])->all();
        return $this->_sendResponse(200, ['message' => "routers data", 'data' => $models]);
    }

    public function actionCreate()
    {
        $model = new Router();
        $params = \Yii::$app->getRequest()->getBodyParams();
        $model->load($params, '');
        if ($model->validate()) {
            if ($model->save()) {
                return $this->_sendResponse(200, ['message' => "New router has been created successfully.", 'data' => $model]);
            }
        }else{
            $error_message=isset(array_values($model->getErrors())[0][0])?array_values($model->getErrors())[0][0]:'Model Errors';
            return $this->_sendResponse(400, ['data' => $model->getErrors(), 'message' => $error_message]);
        }
    }

    public function actionView()
    {
        return $this->_sendResponse(200, ['message' => "done", 'data' => 1]);
    }

    protected function _getStatusCodeMessage($status) {
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    protected function _sendResponse($status, $body = array(), $content_type = 'application/json') {
        // set the status
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        // and the content type
        header('Content-type: ' . $content_type);
        $body['code'] = $status;
        return $body;
    }
}