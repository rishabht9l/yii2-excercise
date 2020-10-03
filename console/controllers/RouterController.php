<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\Router;

class RouterController extends Controller
{
    public $number_of_records;

    public function options($actionID)
    {
        return ['number_of_records'];
    }

    public function optionAliases()
    {
        return ['n' => 'number_of_records'];
    }

    public function actionIndex()
    {
        $value = (int)$this->number_of_records;
        if($value){
            if ($this->confirm("Are you sure you want to create ". $value. " record(s)")) {
                for($i = 1; $i<=$value; $i++) {
                    $model = new Router();
                    $model->sap_id = 'SP00' . $model::createAlphaNumericKey(12) . rand(11, 99);
                    $model->hostname = $model::createAlphaNumericKey(14);
                    $model->loopback = $model::createLoopBack();
                    $model->mac_address = $model::macAddress();
                    $model->status = $model::STATUS_ACTIVE;
                    if($model->save()){
                        echo "done\n";
                    }else{
                        echo "<pre>";print_r($model->getErrors());
                    }
                }
            }
        }else{
            echo "Please enter correct value". "\n";
        }
    }
}