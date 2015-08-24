<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DtrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'time_in') ?>

    <?= $form->field($model, 'time_out') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'lates') ?>

    <?php // echo $form->field($model, 'absences') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
