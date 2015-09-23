<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Jobacc */

$this->title = 'Create Jobacc';
$this->params['breadcrumbs'][] = ['label' => 'Jobaccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobacc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
