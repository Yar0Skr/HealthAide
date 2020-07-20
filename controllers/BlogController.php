<?php

namespace app\controllers;
use yii\helpers\Url;

use Yii;
use app\models\Blog;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends ParentController
{
    /**
     * {@inheritdoc}
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


    public function actionIndex($page = 0)
    {
        if ($page){
            $blogs = Blog::find()->orderBy(['created_at'=>SORT_DESC])->limit(5)->offset(5*($page-1))->all();
        } else {
            $blogs = Blog::find()->orderBy(['created_at'=>SORT_DESC])->limit(5)->all();
            $page = 1;
        }

        $total_pages = ceil(Blog::find()->count('*')/5);

        return $this->render('index',["blogs"=>$blogs,'page'=>$page,'total_pages' => $total_pages]);
    }

    /**
     * Lists all Blog models.
     * @return mixed
     */
    public function actionManage()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('manage', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param string $urlName
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($urlName)
    {
        $blog = $this->findModelByUrlName($urlName);
        $prevBlog = Blog::find()
            ->select('url_name, header, image')
            ->where(['>','created_at',$blog->created_at])
            ->orderBy(['id'=>SORT_ASC])
            ->one();
        $nextBlog = Blog::find()
            ->select('url_name, header, image')
            ->where(['<','created_at',$blog->created_at])
            ->orderBy(['id'=>SORT_DESC])
            ->one();
        return $this->render('view', [
            'blog'=>$blog,
            'nextBlog'=>$nextBlog,
            'prevBlog'=>$prevBlog,
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Blog();
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            $model->is_delete = 0;
            $model->load($data);

            $image = UploadedFile::getInstance($model, 'image');

            //image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/Blog/images/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                // $array = explode(".", $image->name);
                // $name = end($array);
                $model->image = $image->name;
                // Yii::$app->security->generateRandomString() . ".{$name}";
                $image->saveAs($path . $model->image);
            }

            if ($model->save()) {
                return $this->redirect(Url::toRoute('/blog/'.$model->url_name));
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if(Yii::$app->request->post()){
            $oldImageName = $model->image;
            $image = UploadedFile::getInstance($model, 'image');
            $model->load(Yii::$app->request->post());

            //Image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/Blog/images/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                if ($oldImageName != null) {
                    unlink($path . $oldImageName);
                }
                // $array = explode(".", $image->name);
                $name = $image->name;
                // Yii::$app->security->generateRandomString() . '.' . end($array);
                $image->saveAs($path . $name);
                $model->image = $name;
            } else {
                $model->image = $oldImageName;
            }


            if ($model->save()) {
                return $this->redirect(Url::toRoute('/blog/'.$model->url_name));
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Blog model.
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
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $urlName
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelByUrlName($urlName)
    {
        if (($model = Blog::findOne(['url_name'=>$urlName])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
