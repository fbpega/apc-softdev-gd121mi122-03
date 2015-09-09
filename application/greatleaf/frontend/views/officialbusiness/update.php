<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Officialbusiness */

$this->title = 'Update Officialbusiness: ' . ' ' . $model->obno;
$this->params['breadcrumbs'][] = ['label' => 'Officialbusinesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->obno, 'url' => ['view', 'id' => $model->obno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="officialbusiness-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
