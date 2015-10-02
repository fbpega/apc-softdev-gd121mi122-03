<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Overtime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="overtime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filedby')->dropDownList(
        ArrayHelper::map(User::find()->all(),'username','username'),
        ['prompt'=> 'Select username ...']
    )?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'startdate')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'MM dd yyyy'
        ]
    ]);?>

    <?= $form->field($model, 'enddate')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'MM dd yyyy'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
