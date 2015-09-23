<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jobacc */

$this->title = 'Update Jobacc: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jobaccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobacc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
