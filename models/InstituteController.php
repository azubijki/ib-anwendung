<?php

namespace app\models;

use Yii;
use app\models\Institute;
use app\models\InstituteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InstituteController implements the CRUD actions for Institute model.
 */
class InstituteController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Institute models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InstituteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Institute model.
     * @param integer $id
     * @param integer $standorte_ID
     * @return mixed
     */
    public function actionView($id, $standorte_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $standorte_ID),
        ]);
    }

    /**
     * Creates a new Institute model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Institute();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'standorte_ID' => $model->standorte_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Institute model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $standorte_ID
     * @return mixed
     */
    public function actionUpdate($id, $standorte_ID)
    {
        $model = $this->findModel($id, $standorte_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'standorte_ID' => $model->standorte_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Institute model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $standorte_ID
     * @return mixed
     */
    public function actionDelete($id, $standorte_ID)
    {
        $this->findModel($id, $standorte_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Institute model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $standorte_ID
     * @return Institute the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $standorte_ID)
    {
        if (($model = Institute::findOne(['id' => $id, 'standorte_ID' => $standorte_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
