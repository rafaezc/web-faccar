<?php

namespace app\controllers;
use Yii;
use app\models\Medico;
use Da\QrCode\QrCode;
use Da\QrCode\Format\MeCardFormat; 

class MedicoController extends \yii\web\Controller
{
    public function actionIndex() {
        $medicos = Medico::find()->orderBy('Nome')->all();
        return $this->render('index', [
            'medicos' => $medicos,
        ]);
    }

    public function actionView($id) {
        $medico = Medico::findOne($id);

        $format = new MeCardFormat();
        $format->firstName = $medico->Nome;
        $format->email = $medico->Email;
        $format->note = $medico->CRM;
        $format->address = $medico->Endereco .', '. $medico->Bairro;
        $format->url = 'http://'.$medico->site;

        $qrCode = (new QrCode($format))
        ->setSize(250)
        ->setMargin(5)
        ->useForegroundColor(0, 0, 0);

        $qrCode->writeFile(Yii::getAlias('@web') . "img/doctors/qrcodes/{$medico->Medico_id}-{$medico->Nome}.png");

        return $this->render('view', [
            'medico' => $medico,
            'qrCode' => $qrCode
        ]);
    }

}