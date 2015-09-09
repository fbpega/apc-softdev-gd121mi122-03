<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cashvoucher */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cashvouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashvoucher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cvno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cvno], [
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
            'cvno',
            'name',
            'filedate',
            'type',
            'details:ntext',
            'particular:ntext',
            'date',
            'reciept_no',
            'amount',
            'remarks:ntext',
            'total',
            'less_cash_advance',
            'amount_return',
        ],
    ]) ?>

</div>
