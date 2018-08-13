<?php

namespace backend\controllers;

use Yii;
use app\models\Galeriaimage;
use app\models\GaleriaimageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * GaleriaimageController implements the CRUD actions for Galeriaimage model.
 */
class GaleriaimageController extends Controller
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
     * Lists all Galeriaimage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GaleriaimageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Galeriaimage::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Galeriaimage model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Galeriaimage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Galeriaimage();

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'galeriaImg');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->galeriaImg = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Galeriaimage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'galeriaImg');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->galeriaImg = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Galeriaimage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Galeriaimage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galeriaimage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galeriaimage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
