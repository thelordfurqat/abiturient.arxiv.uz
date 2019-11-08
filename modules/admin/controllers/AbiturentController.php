<?php

namespace app\modules\admin\controllers;

use app\models\Ariza;
use Yii;
use app\models\Abiturent;
use app\models\AbiturentSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AbiturentController implements the CRUD actions for Abiturent model.
 */
class AbiturentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ],
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'logout' => ['post'],
            ],
        ],
    ];
}


    /**
     * Lists all Abiturent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AbiturentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Abiturent model.
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
     * Creates a new Abiturent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Abiturent();

        if ($model->load(Yii::$app->request->post())){

            $date = date('Y-m-d-h i s');
            if($model->dtm_varaqi = UploadedFile::getInstance($model,'dtm_varaqi')){
                $model->dtm_varaqi->saveAs(Yii::$app->basePath.'/web/image/'.$date.'dtm.'.$model->dtm_varaqi->extension);
                $model->dtm_varaqi = $date.'dtm.'.$model->dtm_varaqi->extension;
            }
            else{
                $model->dtm_varaqi='avatar.jpg';
            }
            $date = date('Y-m-d-h i s');
            if($model->payment_file= UploadedFile::getInstance($model,'payment_file')){
                $model->payment_file->saveAs(Yii::$app->basePath.'/web/image/'.$date.'pay.'.$model->payment_file->extension);
                $model->payment_file = $date.'pay.'.$model->payment_file->extension;
            }
            else{
                $model->dtm_varaqi='avatar.jpg';
            }

            if(Abiturent::find()->where(['id_kod'=>$model->id_kod])->one()){
                $model=Abiturent::find()->where(['id_kod'=>$model->id_kod])->one();
                $ariza=Ariza::find()->where(['abiturent_id'=>$model->id])->one();
                Yii::$app->session->setFlash('error', 'Ushbu hujjat '.$ariza->holatqu($ariza->holat).' holat bosqichida!!!');
//                $abiturent=new Abiturent();
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            $model->save();
            $ariza=new Ariza();
            $ariza->holat=$model->image;
            $ariza->abiturent_id=$model->id;
            $ariza->save();
            return $this->redirect(['view', 'id' => $model->id]);
            }
        $ariza=new Ariza();
//        $ariza->abiturent_id=1;
        return $this->render('create', [
            'model' => $model,
            'ariza' => $ariza,
        ]);
    }

    /**
     * Updates an existing Abiturent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $olddtm=$model->dtm_varaqi;
        $oldpay=$model->payment_file;
        if ($model->load(Yii::$app->request->post())){
            $date = date('Y-m-d-h i s');
            if($model->dtm_varaqi = UploadedFile::getInstance($model,'dtm_varaqi')){
                $model->dtm_varaqi->saveAs(Yii::$app->basePath.'/web/image/'.$date.'dtm.'.$model->dtm_varaqi->extension);
                $model->dtm_varaqi = $date.'dtm.'.$model->dtm_varaqi->extension;
            }
            else{
                $model->dtm_varaqi=$olddtm;
            }
            $date = date('Y-m-d-h i s');
            if($model->payment_file= UploadedFile::getInstance($model,'payment_file')){
                $model->payment_file->saveAs(Yii::$app->basePath.'/web/image/'.$date.'pay.'.$model->payment_file->extension);
                $model->payment_file = $date.'pay.'.$model->payment_file->extension;
            }
            else{
                $model->payment_file=$oldpay;
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Abiturent model.
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
     * Finds the Abiturent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Abiturent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Abiturent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionOne($id,$holat)
    {
        $model=Abiturent::find()->where(['id'=>$id])->one();
        $model->image=$holat;
        $model->save();

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
