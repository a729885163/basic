<?php

/*
 * 首页控制器
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionCart()
    {
        $this->layout = false;
        return $this->render('cart');
    }

    public function actionCheckout()
    {
        $this->layout = false;
        return $this->render('checkout');
    }

    public function actionBlogPost()
    {
        $this->layout = false;
        return $this->render('blog-post');
    }



}