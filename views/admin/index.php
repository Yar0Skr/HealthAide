<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<div style="min-height: 500px" align="center">
    <h1>Admin panel</h1>
    <div>
        <p>

            <?= Html::a('Editor', ['/blog/manage'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Locations', ['/locations'], ['class'=>'btn btn-primary']) ?>
        </p>
    </div>
</div>

