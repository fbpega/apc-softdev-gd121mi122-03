<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchJobacc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobaccs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobacc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jobacc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'filedate',
            'department',
            'date',
            'reason:ntext',
            // 'office_timein',
            // 'office_timeout',
            // 'site_timein',
            // 'site_timeout',
            // 'destination',
            // 'purpose:ntext',
            // 'accomplishment:ntext',
            // 'remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
