<?php

namespace backend\controllers;

use Yii;
use app\models\Logotipo;
use app\models\LogotipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * LogotipoController implements the CRUD actions for Logotipo model.
 */
class LogotipoController extends Controller
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
     * Lists all Logotipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LogotipoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Logotipo::find();
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
     * Displays a single Logotipo model.
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
     * Creates a new Logotipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Logotipo();

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'logo');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->logo = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Logotipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post())) {
            $images= UploadedFile::getInstance($model, 'logo');
            $ImgName = $images->baseName. '.' .$images->extension;
            $path = Yii::getAlias('@webroot/upload');
            $images->saveAs($path. '/' .$ImgName);
            $model->logo = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Logotipo model.
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
     * Finds the Logotipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Logotipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Logotipo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
