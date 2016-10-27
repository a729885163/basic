<?php

namespace app\modules\controllers;

use yii\web\Controller;

class PublicController extends Controller
{
	public $layout = false;
	public function actionLogin()
	{
		return $this->render("login");
	}
	
	public function actionRegister()
	{
		return $this->render('register');
	}
}

?>