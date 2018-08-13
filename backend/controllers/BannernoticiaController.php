<?php

namespace backend\controllers;

use Yii;
use app\models\Bannernoticia;
use app\models\BannernoticiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * BannernoticiaController implements the CRUD actions for Bannernoticia model.
 */
class BannernoticiaController extends Controller
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
     * Lists all Bannernoticia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannernoticiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Bannernoticia::find();
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
     * Displays a single Bannernoticia model.
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
     * Creates a new Bannernoticia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bannernoticia();

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'imageNoticia');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->imageNoticia = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bannernoticia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'imageNoticia');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->imageNoticia = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bannernoticia model.
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
     * Finds the Bannernoticia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bannernoticia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bannernoticia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
