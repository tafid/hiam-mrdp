<?php

namespace hiam\mrdp\controllers;

use hiam\mrdp\models\EmailConfirm;
use yii\base\InvalidConfigException;
use yii\web\Controller;
use Yii;

class RegistrationController extends Controller
{
    public function actionConfirm()
    {
        $model = new EmailConfirm();
        if ($model->load(Yii::$app->request->get(), '')) {
            $result = $model->confirm();

            return $this->render('confirm', compact('result'));
        }

        throw new InvalidConfigException();
    }
}