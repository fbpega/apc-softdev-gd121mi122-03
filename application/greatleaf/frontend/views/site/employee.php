<?php

/* @var $this yii\web\View */

$this->title = 'GLLI-HRMS';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome <?php echo Yii::$app->user->identity->username ?>!</h1>

        <p class="lead">Greatleaf Land Inc. Human Resources Management System</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h3><b>Daily time record</b></h3>
                <img src="images/attendance.jpg" style="height: 71%; width: 71%;"/>
                <br />
                <p>Check your daily attendance through this module.</p>
                <p><a class="btn btn-lg btn-success" href="?r=site%2Fabout">View my DTR &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h3><b>Submit form requests</b></h3>
                <img src="images/forms.png" style="height: 70%; width: 70%;"/>
                <br />
                <p>File requests forms and send them to the HR.</p>
                <p><a class="btn btn-lg btn-success" href="?=/site/request">Submit requests &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h3><b>Employee profile</b></h3>
                <img src="images/profiles.jpg" style="height: 92%; width: 92%;"/>
                <br />
                <p>View a summary of your records in your profile.</p>
                <p><a class="btn btn-lg btn-success" href="?=/site/dtr">View profile &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
