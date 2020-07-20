<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
\app\assets\AppAsset::register($this);

?>

<div class="info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'read_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

        <?=$form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['multiple'=>false, 'accept' => 'image/*'],
            'pluginOptions'=>[
                'initialPreview'=>[
                    $model->image ? '@web/uploads/info/images/'.$model->image : null,
                ],
                'initialPreviewShowDelete' => false,
                'initialPreviewAsData'=>true,
                'initialCaption'=>$model->image,
                'showDrag' => false,
                'showRemove' => false,
                'showUpload' => false,
                'overwriteInitial',
            ]
        ]);
        ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
