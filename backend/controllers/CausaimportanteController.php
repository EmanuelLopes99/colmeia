<?php

namespace backend\controllers;

use Yii;
use app\models\Causaimportante;
use app\models\CausaimportanteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * CausaimportanteController implements the CRUD actions for Causaimportante model.
 */
class CausaimportanteController extends Controller
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
     * Lists all Causaimportante models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CausaimportanteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Causaimportante::find();
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
     * Displays a single Causaimportante model.
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
     * Creates a new Causaimportante model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Causaimportante();

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'images');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->images = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Causaimportante model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'images');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->images = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Causaimportante model.
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
     * Finds the Causaimportante model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Causaimportante the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Causaimportante::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
