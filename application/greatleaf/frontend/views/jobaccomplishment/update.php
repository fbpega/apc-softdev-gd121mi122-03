<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobaccomplishment */

$this->title = 'Update Jobaccomplishment: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Jobaccomplishments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->jano]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobaccomplishment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
