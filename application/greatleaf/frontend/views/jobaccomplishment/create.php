<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Jobaccomplishment */

$this->title = 'Create Jobaccomplishment';
$this->params['breadcrumbs'][] = ['label' => 'Jobaccomplishments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobaccomplishment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
