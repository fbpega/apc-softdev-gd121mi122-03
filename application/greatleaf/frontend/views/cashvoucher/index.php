<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchCashvoucher */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cashvouchers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashvoucher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cashvoucher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cvno',
            'name',
            'filedate',
            'type',
            'details:ntext',
            // 'particular:ntext',
            // 'date',
            // 'reciept_no',
            // 'amount',
            // 'remarks:ntext',
            // 'total',
            // 'less_cash_advance',
            // 'amount_return',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
