<?php

namespace app\controllers;

use app\models\Abiturent;
use app\models\Ariza;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($abiturent=null)
    {
        $abiturentt=new Abiturent();

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
                $model->payment_file='avatar.jpg';
            }

            if(Abiturent::find()->where(['id_kod'=>$model->id_kod])->one()){
                $model=Abiturent::find()->where(['id_kod'=>$model->id_kod])->one();
                $ariza=Ariza::find()->where(['abiturent_id'=>$model->id])->one();
                Yii::$app->session->setFlash('error', 'Ushbu hujjatga ariza jo\'natilgan hamda '.$ariza->holatqu($ariza->holat).' holat bosqichida!!!');
//                $abiturent=new Abiturent();
                return $this->redirect(['index','#'=>'message']);

            }

            $model->save();
            $ariza=new Ariza();
            $ariza->holat=1;
            $ariza->abiturent_id=$model->id;
            $ariza->save();
            Yii::$app->session->setFlash('success', 'Arizangiz qabul qilindi');
            return $this->redirect(['index','#'=>'message']);


        }
        if($abiturent)
            $abiturentt=$abiturent;
        return $this->render('index', [
            'abiturent' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
//        $this->layout='site';
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSendariza()
    {

    }

    public function actionCheck()
    {
        if(Yii::$app->request->post('id_code')){
            $idcode=Yii::$app->request->post('id_code');

            if(Abiturent::find()->where(['id_kod'=>$idcode])->one()) {
                $model = Abiturent::find()->where(['id_kod' => $idcode])->one();
                $ariza = Ariza::find()->where(['abiturent_id' => $model->id])->one();
                $data='Hujjat <strong>'.$model->fio.'</strong> nomiga raqami <strong>'.$model->id_kod.'</strong> holda olingan hamda hozirda '.
                    $ariza->holatqu($ariza->holat) .'da!!';
                Yii::$app->session->setFlash('check', $data);
//                $abiturent=new Abiturent();
            }
            else{
                Yii::$app->session->setFlash('check', 'Ushbu hujjatga ariza jo\'natilmagan!!!');
            }
            return $this->redirect(['index','#'=>'subscribe']);

        }
        return $this->redirect(['index','#'=>'subscribe']);
    }
}
