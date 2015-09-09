<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create employee';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to create user profile:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['enctype' => 'multipart/form-data'], 'layout' => 'inline']); ?>
                <br />
                <?= $form->field($model, 'empcode', [
                    'inputOptions' => [
                    'placeholder' => 'e.g. 2015-ES01223',
                    ],
                    'horizontalCssClasses' => [
                    'wrapper' => 'col-sm-6',
                    ],
                ])->hint('Employee code'); ?>
                <br />
                <?= $form->field($model, 'firstname')->hint('First name'); ?>

                <?= $form->field($model, 'lastname')->hint('Last name'); ?>

                <?= $form->field($model, 'middlename')->hint('Middle name'); ?>
                <br />
                <?= $form->field($model, 'department')->hint('Department'); ?>

                <?= $form->field($model, 'position')->hint('Position'); ?>
                
                <?= $form->field($model, 'hiredate')->hint('Hiredate'); ?>
                <br />
                <?= $form->field($model, 'specialization')->hint('Specialization'); ?>
                <br />
                <?= $form->field($model, 'cellno')->hint('Mobile contact'); ?>

                <?= $form->field($model, 'officeno')->hint('Office contact'); ?>

                <?= $form->field($model, 'username')->hint('Username'); ?>

                <?= $form->field($model, 'password')->passwordInput()->hint('Password'); ?>

                <?= $form->field($model, 'email')->hint('Email'); ?>
                <br />
                <?= $form->field($model, 'simpledesc')->hint('Description'); ?>
                <br />
                <br />
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
