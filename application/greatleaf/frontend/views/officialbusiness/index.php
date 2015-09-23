<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchOfficialbusiness */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Officialbusinesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="officialbusiness-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Officialbusiness', ['create'], ['class' => 'btn btn-success']) ?>
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
