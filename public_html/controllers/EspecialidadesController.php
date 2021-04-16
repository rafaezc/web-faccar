<?php

namespace app\controllers;
use app\models\Especialidades;
use Yii;

class EspecialidadesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Especialidades();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            Yii::$app->session->setFlash('sucess', 'Enviado com sucesso');
        } else {
            Yii::$app->session->setFlash('errors', $model->errors);
        }

        return $this->render('index', [
            'Vmodel' => $model,
        ]);
    }

}
