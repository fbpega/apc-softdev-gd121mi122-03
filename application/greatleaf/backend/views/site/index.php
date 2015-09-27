<?php

/* @var $this yii\web\View */

$this->title = 'GLLI-HRMS';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome, <?= Yii::$app->user->identity->username ?>!</h1>
        <p class="lead">Greatleaf Land Inc. Human Resources Management System</p>

        <!-- use this button to prompt user to logon to the DTR system-->
        <!-- <p><a class="btn btn-lg btn-success" href="">DTR Login</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Employee Profiles</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="">Employee Profiles &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Daily Track Records</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="">Daily Track Records &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Submitted Requests</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="">Submitted Requests &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
