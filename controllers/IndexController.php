<?php

/*
 * 首页控制器
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionIndex2()
    {
        $this->layout = false;
        return $this->render('index2');
    }

    public function actionAbout()
    {
        $this->layout = false;
        return $this->render('about');
    }

    public function actionFaq()
    {
        $this->layout = false;
        return $this->render('faq');
    }

    public function actionContact()
    {
        $this->layout = false;
        return $this->render('contact');
    }

    public function actionTerms()
    {
        $this->layout = false;
        return $this->render('terms');
    }

    public function actionAuthentication()
    {
        $this->layout = false;
        return $this->render('authentication');
    }
}