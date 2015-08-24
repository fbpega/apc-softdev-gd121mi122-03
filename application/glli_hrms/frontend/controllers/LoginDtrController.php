<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginDtr;

class LoginDtrController extends Controller
{
	public function actionLogin()
	{
		$model = new LoginDtr;

		if ($model->load(Yii::$app->request->post()) && $model->validate()){
			return $this->render('view', ['model' => $model]);
		} else {
			return $this->render('create', ['model' => $model]);
		}

	}
}
?>