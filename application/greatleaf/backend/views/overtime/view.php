<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Overtime */

$this->title = 'Overtime request '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Overtimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="overtime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete '.$this->title,
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'filedby',
            'filedate',
            'reason:ntext',
            'startdate',
            'enddate',
        ],
    ]) ?>

</div>
