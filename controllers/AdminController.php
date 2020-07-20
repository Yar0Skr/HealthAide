<?php

namespace app\controllers;

class AdminController extends ParentController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
