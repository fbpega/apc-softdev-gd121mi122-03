<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Dtr */

$this->title = 'Create Dtr';
$this->params['breadcrumbs'][] = ['label' => 'Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
