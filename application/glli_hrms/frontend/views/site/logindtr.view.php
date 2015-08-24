<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<h1>Attendance as of August 24, 2015</h1>
<p><label>Username</label>:</p>
	<?= Html::encode($model->username) ?>
<br /><br />
<p><label>Password</label>:</p>
	<?= Html::encode($model->username) ?>

<?php $form = ActiveForm::begin();?>
            <?= $form->field($model, 'username')->textArea(['rows' => '1'])->label('Username'); ?>
            <?= $form->field($model, 'password')->textArea(['rows' => '1'])->label('Password'); ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>