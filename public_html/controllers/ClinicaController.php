<?php

namespace app\controllers;
use Yii;
use app\models\Clinica;

class ClinicaController extends \yii\web\Controller
{
    public function actionIndex() {
        $clinicas = Clinica::find()->orderBy('Nome')->all();
        return $this->render('index',[
            'clinicas' => $clinicas
        ]);
    }

    public function actionView() {
        return $this->render('view');
    }

}