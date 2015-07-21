<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\myaddress */

$this->title = 'Update Myaddress: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Myaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="myaddress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
