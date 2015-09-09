<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Overtime */
/* @var $form yii\widgets\ActiveForm */
?>

    <pre>
        <b>Note:</b>
        OT Authorization must be submitted to HR at least two (2) hours BEFORE actual overtime work
        if OT is more than 1.5 hour on regular days and at least one (1) day BEFORE actual overtime
        work if OT is on Sunday or Holiday. Late filing will FORFEIT overtime pay.
    </pre>
<div class="overtime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'startdate')->textInput() ?>

    <?= $form->field($model, 'enddate')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requestdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
