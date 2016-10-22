<?php

/*
 * 首页控制器
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionBlog()
    {
        $this->layout = false;
        return $this->render('blog');
    }

    public function actionBlogFullwidth()
    {
        $this->layout = false;
        return $this->render('blog-fullwidth');
    }

    public function actionBlogPost()
    {
        $this->layout = false;
        return $this->render('blog-post');
    }



}