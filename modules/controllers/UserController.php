<?php
namespace app\modules\controllers;

use yii\web\Controller;

class UserController extends Controller
{
	public function actionProfile()
	{
		$this->layout = "layout2";
		return $this->render("profile");
	}
}


?>