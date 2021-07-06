<?php

namespace app\controllers;
use Yii;
use app\models\Clinica;
use Da\QrCode\QrCode;
use Da\QrCode\Format\MeCardFormat; 

class ClinicaController extends \yii\web\Controller
{
    public function actionIndex() {
        $clinicas = Clinica::find()->orderBy('Nome')->all();
        return $this->render('index',[
            'clinicas' => $clinicas
        ]);
    }

    public function actionView($id) {
        $clinica = Clinica::findOne($id);

        $format = new MeCardFormat();
        $format->firstName = $clinica->Nome;
        $format->phone = $clinica->Telefone;
        $format->email = $clinica->Email;
        $format->address = $clinica->Endereco . ", " . $clinica->Bairro;
        $format->note = $clinica->Cidade;

        $qrCode = (new QrCode($format))
        ->setSize(250)
        ->setMargin(5)
        ->useForegroundColor(0, 0, 0);

        $qrCode->writeFile(Yii::getAlias('@web') . "img/clinics/qrcodes/{$clinica->Clinica_id}-{$clinica->Nome}.png");
        
        return $this->render('view', [
            'clinica' => $clinica,
            'qrCode' => $qrCode
        ]);
    }

}