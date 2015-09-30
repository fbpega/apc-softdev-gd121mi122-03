<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cashvoucher */

$this->title = 'Create Cashvoucher';
$this->params['breadcrumbs'][] = ['label' => 'Cashvouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashvoucher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
