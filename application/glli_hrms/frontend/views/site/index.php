<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\LoginDtr;

$this->title = 'GreatLeaf HRM';
?>
<div class="site-index">
    
         <img class="" src="../images/new-logo-v3.png" style="height: 78px; width: 304px; position: absolute; top: 30%;"></img>

         

        <div class="body-content">
            <?php $form = ActiveForm::begin();?>
            <?= $form->field($model, 'username')->textArea(['rows' => '1'])->label('Username'); ?>
            <?= $form->field($model, 'password')->textArea(['rows' => '1'])->label('Password'); ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
</div>

<div style="position: absolute; left: 48%; top: 30%; text-align: center;">
        <h1>Good day!</h1>
        <h4>Welcome to GreatLeaf Land Human Resources Management System</h4>
        <br>
        <h4>Use the login form at the left for your Daily Time Record.</h4>
        <h4>Click system login to access profile, DTR, and form requests.</h4>
        <br>
        <h5>If you are having trouble logging in, contact system administrator.</h5>
</div>