<?php

namespace app\controllers;
use Yii;
use app\models\Medico;

class MedicoController extends \yii\web\Controller
{
    public function actionIndex() {
        $medicos = Medico::find()->orderBy('Nome')->all();
        return $this->render('index',[
            'medicos' => $medicos,
        ]);
    }

    public function actionView() {
        return $this->render('view');
    }

}