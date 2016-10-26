<?php

namespace app\controllers;

use Yii;
use yii\web\controller;
use app\models\Hello;

class HelloController extends Controller
{

    public function actions(){
        return [
            'error' => 'yii\web\ErrorAction',

            'view' => [
                'class' => 'yii\web\ViewAction',
                'viewPrefix' => '',
                ],
        ];
    }

    public function actionHelloWorld()
    {
        $model = new Hello;
        $one = $model->find()->one();
        //return "hello world";
        $this->layout = "layout2";
        return $this->render('hello-world', [
                'foo' => 'foo',
                'bar' => $one,
                ]
            );
    }

    public function actionForward()
    {
        return $this->redirect('http:www.baidu.com');
    }

    public function actionViews($id, $version = null)
    {
        return $id . $version;
    }
}



