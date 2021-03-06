<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Jobacc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jobaccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobacc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'filedate',
            'department',
            'date',
            'reason:ntext',
            'office_timein',
            'office_timeout',
            'site_timein',
            'site_timeout',
            'destination',
            'purpose:ntext',
            'accomplishment:ntext',
            'remarks:ntext',
        ],
    ]) ?>

</div>
