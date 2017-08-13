<?php

namespace backend\modules\user\controllers;
use Yii;
use backend\modules\user\models\User;
use backend\modules\user\models\UserProfile;
use backend\modules\user\models\UserShop;
use backend\modules\user\models\UserShopAddress;
use backend\modules\user\models\UserShopFileMapping;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * DefaultController implements the CRUD actions for User model.
 */
class DefaultController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $modelUserProfile = new UserProfile();
        $modelUserShop   = new UserShop();
        $modelUserShopAddress = new UserShopAddress();
        $modelShopFile = new UserShopFileMapping();
  //      $file_urls = [];


        if ($model->load(Yii::$app->request->post()) &&
            $modelUserProfile->load(Yii::$app->request->post())&&
            $modelUserShop->load(Yii::$app->request->post()) &&
             $modelUserShopAddress->load(Yii::$app->request->post()))
              {
              $valid = $model->validate();
              $valid = $valid && $modelUserProfile->validate();
              $valid = $valid && $modelUserShop->validate();
                $valid = $valid &&  $modelUserShopAddress->validate();
                $modelShopFile->gallery = UploadedFile::getInstances($modelUserShop, 'shop_image');
                //  print_r($modelUserShopAddress->errors);

                  if($valid)
               {

                 $transaction = Yii::$app->db->beginTransaction();
                 try{
                  
                   if($flag = $model->save(false))
                   {

                     $modelUserProfile->user_id = $model->id;
                     $modelUserShop->user_id   = $model->id;
                     $modelUserShop->save(false);
                //     print_r($_POST);exit('12');
                     $modelUserShopAddress->shop_id = $modelUserShop->id;
                     $modelShopFile->upload($modelUserShop);
                    $flag = ($modelUserProfile->save(false) && $modelUserShopAddress->save(false));
                   }
                   if($flag)
                   {
                     $transaction->commit();
                    Yii::$app->session->setFlash('success', 'User created successfully');
                    return $this->redirect(['view', 'id' => $model->id]);

                   }
                 }
                 catch (\Exception $exception) {
                  print_r($exception->getMessage())   ;exit('12');
                    Yii::$app->session->setFlash('error', 'Unable to create user.');
                    $transaction->rollBack();
                    }

                return $this->redirect(['view', 'id' => $model->id]);
            }
            print_r($model->errors);
        //    Yii::$app->session->setFlash('error', 'Error during User Request');


            }else {
                return $this->render('create', [
                    'model' => $model,
                    'modelUserProfile' => $modelUserProfile,
                    'modelUserShop'   =>   $modelUserShop,
                    'modelUserShopAddress' =>$modelUserShopAddress,


                ]);
            }


    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelUserProfile = $model->userProfile;
  //print_r($modelUserProfile); exit('12');
        if ($model->load(Yii::$app->request->post()) && $modelUserProfile->load(Yii::$app->request->post())) {
            $valid = $model->validate();
            $valid = $valid && $modelUserProfile->validate();
               if($valid)
               {
                   $model->save(false);
                  // print_r($model); exit('12');
                   $modelUserProfile->save(false);

               }
             return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update-profile', [
                'model' => $model,
                'modelUserProfile' =>$modelUserProfile,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
