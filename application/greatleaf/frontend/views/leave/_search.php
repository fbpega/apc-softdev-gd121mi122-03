<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchLeave */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leave-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'startdate') ?>

    <?= $form->field($model, 'enddate') ?>

    <?= $form->field($model, 'duration') ?>

    <?= $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'requestdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
