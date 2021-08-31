<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\MedicoHasEspecialidade;
use app\models\search\MedicoHasEspecialidadeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MedicoHasEspecialidadeController implements the CRUD actions for MedicoHasEspecialidade model.
 */
class MedicoHasEspecialidadeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MedicoHasEspecialidade models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedicoHasEspecialidadeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MedicoHasEspecialidade model.
     * @param integer $Medico_id
     * @param integer $Especialidade_id
     * @param integer $Clinica_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Medico_id, $Especialidade_id, $Clinica_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Medico_id, $Especialidade_id, $Clinica_id),
        ]);
    }

    /**
     * Creates a new MedicoHasEspecialidade model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MedicoHasEspecialidade();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Medico_id' => $model->Medico_id, 'Especialidade_id' => $model->Especialidade_id, 'Clinica_id' => $model->Clinica_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MedicoHasEspecialidade model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Medico_id
     * @param integer $Especialidade_id
     * @param integer $Clinica_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Medico_id, $Especialidade_id, $Clinica_id)
    {
        $model = $this->findModel($Medico_id, $Especialidade_id, $Clinica_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Medico_id' => $model->Medico_id, 'Especialidade_id' => $model->Especialidade_id, 'Clinica_id' => $model->Clinica_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MedicoHasEspecialidade model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Medico_id
     * @param integer $Especialidade_id
     * @param integer $Clinica_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Medico_id, $Especialidade_id, $Clinica_id)
    {
        $this->findModel($Medico_id, $Especialidade_id, $Clinica_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MedicoHasEspecialidade model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Medico_id
     * @param integer $Especialidade_id
     * @param integer $Clinica_id
     * @return MedicoHasEspecialidade the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Medico_id, $Especialidade_id, $Clinica_id)
    {
        if (($model = MedicoHasEspecialidade::findOne(['Medico_id' => $Medico_id, 'Especialidade_id' => $Especialidade_id, 'Clinica_id' => $Clinica_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
