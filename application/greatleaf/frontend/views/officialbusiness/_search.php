<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchOfficialbusiness */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="officialbusiness-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'filedate') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'office_timein') ?>

    <?php // echo $form->field($model, 'office_timeout') ?>

    <?php // echo $form->field($model, 'site_timein') ?>

    <?php // echo $form->field($model, 'site_timeout') ?>

    <?php // echo $form->field($model, 'destination') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'accomplishment') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
