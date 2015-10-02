<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Overtime */

$this->title = 'Create overtime request';
$this->params['breadcrumbs'][] = ['label' => 'Overtimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="overtime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
