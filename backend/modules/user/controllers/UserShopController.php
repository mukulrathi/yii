<?php

namespace backend\modules\user\controllers;

use backend\modules\user\models\UserShopFileMapping;
use Yii;
use backend\modules\user\models\UserShop;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\modules\user\models\search\UserShop as UserShopSearch;


/**
 * UserShopController implements the CRUD actions for UserShop model.
 */
class UserShopController extends Controller
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
     * Lists all UserShop models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserShopSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
       ]);
}   

    /**
    }
        /*
     * Displays a single UserShop model.
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
     * Creates a new UserShop model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserShop();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserShop model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelUserShopAddress = $model->userShopAddress;
        $modelShopFile = new UserShopFileMapping();

        $file_urls = [];
        if(!empty($model->getUserShopFileMappings()->one()->file->url)){
            $banners = $model->getUserShopFileMappings()->all();
            foreach ($banners as $files) {
                $file_urls[] = $files->file->url;
            }
        }

        if ($model->load(Yii::$app->request->post()) && $modelUserShopAddress->load(Yii::$app->request->post())) {
            $valid = $model->validate();
            $valid = $valid && $modelUserShopAddress->validate();
          if($valid)
          {
             $model->save(false);
              $modelUserShopAddress->save(false);
              $modelShopFile->gallery = UploadedFile::getInstances($model, 'shop_image');
              $modelShopFile->upload($model);
          }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelUserShopAddress' =>$modelUserShopAddress,
                'file_urls'   =>$file_urls,
                'modelShopFile' =>$modelShopFile,
            ]);
        }
    }

    /**
     * Deletes an existing UserShop model.
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
     * Finds the UserShop model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserShop the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserShop::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
