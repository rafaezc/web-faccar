<?php
namespace app\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Email;

class EmailMarketing extends Widget
{

    public function run()
    {
        $model = new Email();
 
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'This is the message');
            // return $this->render('ConfirmarRegistro', ['model' => $model]);
        } else {
            return $this->render('EmailMarketing', ['model' => $model]);
            // print_r($model->getErrors());
        }
        
        // return $this->render('EmailMarketing', [
        //     'model' = $model
        // ]);
    }
}