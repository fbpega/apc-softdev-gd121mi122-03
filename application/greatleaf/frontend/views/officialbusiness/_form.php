<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Officialbusiness */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="officialbusiness-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filedate')->textInput() ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'office_timein')->textInput() ?>

    <?= $form->field($model, 'office_timeout')->textInput() ?>

    <?= $form->field($model, 'site_timein')->textInput() ?>

    <?= $form->field($model, 'site_timeout')->textInput() ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purpose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accomplishment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
