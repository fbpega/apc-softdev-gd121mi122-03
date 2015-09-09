<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobaccomplishment */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Jobaccomplishments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobaccomplishment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jano], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jano], [
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
            'jano',
            'name',
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
