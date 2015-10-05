<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\SearchOvertime;
use common\models\SearchOfficialbusiness;
use common\models\SearchJobacc;
use common\models\SearchLeave;
use common\models\SearchCashvoucher;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchOvertime */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Queue List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="overtime-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br />
    <h3><?= Html::encode('Overtime requests') ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'filedby',
            'filedate',
            'reason:ntext',
            'startdate',
            'enddate',
        ],
    ]); ?>

</div>

<div class="overtime-index">

    <br />
    <h3><?= Html::encode('Leave requests') ?></h3>


    <?php
        $searchModel1 = new SearchLeave();
        $dataProvider1 = $searchModel1->search(Yii::$app->request->queryParams);

    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider1,
        'filterModel' => $searchModel1,
        'columns' => [
            'id',
            'filedate',
            'reason:ntext',
            'startdate',
            'enddate',
            'duration',
        ],
    ]); ?>

</div>

<div class="overtime-index">

    <br />
    <h3><?= Html::encode('Job Accomplishment requests') ?></h3>


    <?php
        $searchModel2 = new SearchJobacc();
        $dataProvider2 = $searchModel2->search(Yii::$app->request->queryParams);

    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $searchModel2,
        'columns' => [
            'id',
            'filedate',
            //'department',
            'date',
            'reason:ntext',
            'office_timein',
            'office_timeout',
            'site_timein',
            'site_timeout',
            'destination',
            'purpose:ntext',
            //'accomplishment:ntext',
            //'remarks:ntext',
        ],
    ]); ?>

</div>

<div class="overtime-index">

    <br />
    <h3><?= Html::encode('Cash Voucher requests') ?></h3>


    <?php
        $searchModel3 = new SearchCashvoucher();
        $dataProvider3 = $searchModel3->search(Yii::$app->request->queryParams);

    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider3,
        'filterModel' => $searchModel3,
        'columns' => [
            'id',
            'filedate',
            //'type',
            'details:ntext',
            'particular:ntext',
            'date',
            //'receiptno',
            'amount',
            'remarks:ntext',
            'total',
            'less_cash_advance',
            'amount_return',
        ],
    ]); ?>

</div>

<div class="overtime-index">

    <br />
    <h3><?= Html::encode('Official Business requests') ?></h3>


    <?php
        $searchModel4 = new SearchOfficialbusiness();
        $dataProvider4 = $searchModel4->search(Yii::$app->request->queryParams);

    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $searchModel2,
        'columns' => [
            'id',
            'filedate',
            //'department',
            'date',
            'reason:ntext',
            'office_timein',
            'office_timeout',
            'site_timein',
            'site_timeout',
            'destination',
            'purpose:ntext',
            //'accomplishment:ntext',
            //'remarks:ntext',
        ],
    ]); ?>

</div>
    