<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Officialbusiness */

$this->title = 'Create Officialbusiness';
$this->params['breadcrumbs'][] = ['label' => 'Officialbusinesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="officialbusiness-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
