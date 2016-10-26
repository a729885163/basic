<?php

/*
 * 首页控制器
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class IndexController extends Controller
{
    public $layout = 'layout1';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIndex2()
    {
        return $this->render('index2');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionTerms()
    {
        return $this->render('terms');
    }

    public function actionAuthentication()
    {
        return $this->render('authentication');
    }
}