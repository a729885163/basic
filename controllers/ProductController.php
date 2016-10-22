<?php

/*
 * 首页控制器
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionSingleProduct()
    {
        $this->layout = false;
        return $this->render('single-product');
    }

    public function actionSingleProductSidebar()
    {
        $this->layout = false;
        return $this->render('single-product-sidebar');
    }

    public function actionCategoryGrid()
    {
        $this->layout = false;
        return $this->render('category-grid');
    }

    public function actionCategoryGrid2()
    {
        $this->layout = false;
        return $this->render('category-grid2');
    }


}