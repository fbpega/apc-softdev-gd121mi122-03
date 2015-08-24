<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dtr */

$this->title = 'Update Dtr: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dtr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
