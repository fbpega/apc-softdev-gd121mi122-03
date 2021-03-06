<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Greatleaf Land Inc.',
        'brandUrl' => '?r=site%2Femployee', //Yii:$app->homeUrl
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
     
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'General', 'url' => ['/site/index']];
    } else {
        $menuItems[] = ['label' => 'My Profile', 'url' => ['/employee/view', 'id' => Yii::$app->user->identity->id]];
        $menuItems[] = ['label' => 'My DTR', 'url' => ['/dtr/view', 'id' => Yii::$app->user->identity->id]];
        $menuItems[] = ['label' => 'My Requests', 'url' => ['/site/requests']];
        
        echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
                        ['label' => 'Submit Requests', 'items' => [
                        ['label' => 'Overtime', 'url' => '?r=overtime%2Fcreate'],
                        ['label' => 'Leave', 'url' => '?r=leave%2Fcreate'],
                        ['label' => 'Cash Voucher', 'url' => '?r=cashvoucher%2Fcreate'],
                        ['label' => 'Job Accomplishment', 'url' => '?r=jobacc%2Fcreate'],
                        ['label' => 'Official Business', 'url' => '?r=officialbusiness%2Fcreate'],
                        ]],
                    ],
        ]);

        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-right">&copy; Greatleaf Land Inc.    <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
