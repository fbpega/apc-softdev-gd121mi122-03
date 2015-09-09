<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cashvoucher */

$this->title = 'Update Cashvoucher: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cashvouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->cvno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cashvoucher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
