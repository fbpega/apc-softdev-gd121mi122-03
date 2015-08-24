<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dtrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dtr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'time_in',
            'time_out',
            'date',
            'lates',
            // 'absences',
            // 'employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
