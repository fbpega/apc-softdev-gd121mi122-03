<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
<br />
<br />
<?php $form = ActiveForm::begin();?>
            <div class="col-lg-4">
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
            </div>
<?php ActiveForm::end(); ?>