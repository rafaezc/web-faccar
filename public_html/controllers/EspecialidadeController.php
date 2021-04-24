<?php

namespace app\controllers;
use Yii;
use app\models\Especialidade;

class EspecialidadeController extends \yii\web\Controller
{
    public function actionView($id) {
        $model = Especialidade::findOne($id);
        return $this->render('view',[
            'Vmodel' => $model
        ]);
    }

    public function actionIndex() {
        $model = Especialidade::find()->orderBy('Titulo')->all();
        return $this->render('index',[
            'Vmodel' => $model
        ]);
    }

    public function actionStore() {
        $model = new Especialidade();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Gravado com successo!');
            $model = new Especialidade();
        } else {
            Yii::$app->session->setFlash('errors', $model->errors);
        }
        return $this->render('store',[
            'Vmodel' => $model
        ]);
    }

    public function actionUpdate() {

    }

    public function actionDelete() {

    }

}