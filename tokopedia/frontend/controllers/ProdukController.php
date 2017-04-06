<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Produk;
use frontend\models\ProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProdukController implements the CRUD actions for Produk model.
 */
class ProdukController extends Controller
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
     * Lists all Produk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider-> pagination = ['pageSize' => 5];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produk model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Produk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$model = new Produk();

        if ($model->load(Yii::$app->request->post())) {
			$model->file = UploadedFile::getInstance($model, 'file');
			if($model->file){
				$imagepath = 'uploads/';
				$model->foto = $imagepath .rand(10,100).$model->file->name;
			}
			
			if ($model->save()){
				if($model->file){
					$model->file->saveAs($model->foto);
				}
				return $this->redirect(['view', 'id' => $model->id_produk]);
			}
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionImage($id){
        return $this->render('foto',['model' => $this->findModel($id),
		]);
    }

    /**
     * Updates an existing Produk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
			if($model->file){
				$imagepath = 'uploads/';
				$model->foto = $imagepath .rand(10,100).$model->file->name;
			}
			
			if ($model->save()){
				if($model->file){
					$model->file->saveAs($model->foto);
				return $this->redirect(['view', 'id' => $model->id_produk]);
			    }
			}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Produk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Produk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
