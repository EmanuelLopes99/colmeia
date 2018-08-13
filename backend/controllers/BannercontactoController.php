<?php

namespace backend\controllers;

use Yii;
use app\models\Bannercontacto;
use app\models\BannercontactoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * BannercontactoController implements the CRUD actions for Bannercontacto model.
 */
class BannercontactoController extends Controller
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
     * Lists all Bannercontacto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannercontactoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Bannercontacto::find();
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
     * Displays a single Bannercontacto model.
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
     * Creates a new Bannercontacto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bannercontacto();

         if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'imageContacto');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->imageContacto = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bannercontacto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'imageContacto');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->imageContacto = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bannercontacto model.
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
     * Finds the Bannercontacto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bannercontacto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bannercontacto::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
