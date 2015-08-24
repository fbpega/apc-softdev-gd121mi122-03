<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dtr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'time_in')->textInput() ?>

    <?= $form->field($model, 'time_out')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'lates')->textInput() ?>

    <?= $form->field($model, 'absences')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
