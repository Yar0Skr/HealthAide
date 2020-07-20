<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Blog */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="info-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'order_number',
                'header',
                'short_info',
                //'text:ntext',
                //'image',
                //'file',
                //'is_delete',
                'created_at',
                //'updated_at'
                ['class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'update' => function ($url, $model) {
                            return Html::a('<button class="w-100 btn btn-warning">Edit</button>', $url, [
                                'title' => Yii::t('app', 'lead-update'),
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a('<button class="w-100 btn btn-danger">Delete</button>', $url, [
                                'title' => Yii::t('app', 'lead-delete'),
                                'data' => [
                                    'confirm' => 'Are you sure you wish to delete this blog?',
                                ],
                            ]);
                        },
                    ]],

            ],
        ]); ?>


    </div>
</div>
