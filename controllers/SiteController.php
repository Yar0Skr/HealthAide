<?php

namespace app\controllers;

use app\models\Blog;
use app\models\Locations;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
    public function actionIndex()
    {
        $blogs = Blog::find()->limit(3)->orderBy(['created_at'=>SORT_DESC])->all();
        return $this->render('index', ['blogs'=>$blogs]);
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
    public function actionFaq()
    {

        return $this->render('faq');
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

    /**
     * Displays mmplans page.
     *
     * @return string
     */
    public function actionMmplans()
    {
        return $this->render('mmplans');
    }

    /**
     * Displays forms page.
     *
     * @return string
     */
    public function actionForms()
    {
        return $this->render('forms');
    }

    public function actionAboutUs()
    {
        return $this->render('aboutus');
    }

    public function actionCdpap()
    {
        return $this->render('cdpap');
    }

    public function actionPrivacyPolicy()
    {
        return $this->render('privacyPolicy');
    }

    public function actionNonDiscriminationPolicy()
    {
        return $this->render('nonDiscriminationPolicy');
    }

    public function actionCommunityResources()
    {
        return $this->render('communityResources');
    }

    public function actionThankyou()
    {
        return $this->render('thankyou');
    }
}
