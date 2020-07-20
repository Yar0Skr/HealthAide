<?php


namespace app\controllers;


use app\assets\AppAsset;
use Yii;
use yii\web\Controller;

class ParentController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest){
            if ($action->id == "post-create" || ($action->controller->id == 'blog' && ($action->id == 'view' || $action->id == "index"))) {
                return parent::beforeAction($action);
            }else{
            return Yii::$app->getResponse()->redirect('/');
            }
        } else{
            return parent::beforeAction($action);
        }

    }
}