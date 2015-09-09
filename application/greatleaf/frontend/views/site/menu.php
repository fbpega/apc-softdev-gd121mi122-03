<?php
/* @var $this yii\web\View */
$this->title = 'GreatLeaf HRMS';
?>
<html>
<head><link rel="stylesheet" type="text/css" href="css/glli.css"></head>
<div style="position: absolute; left: 9%; top: 8%; text-align: center;">
    <br>
        <h2>Welcome back, <?php echo Yii::$app->user->identity->username ?>!</h2>
        <br>

    </div>
            <div id="attendance_button" class="menu">
                <a href=""><span><div style="height:70px; width:80px; background-image: url(<?php echo "images/attendance.png";?>); position:absolute; top:5px;"></div></span><span data-title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MY PROFILE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">MY PROFILE</span></a>
            </div>
            <div id="payroll_button" class="menu">
                <a href=""><span><div style="height:70px; width:80px; background-image: url(<?php echo "images/payroll.png";?>); position:absolute; top:5px;"></div></span><span data-title="&nbsp;&nbsp;&nbsp;&nbsp;MY DTR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">MY DTR</span></a>
            </div>
            <div id="employee_button" class="menu">
                <a href=""><span><div style="height:70px; width:80px; background-image: url(<?php echo "images/employees.png";?>); position:absolute; top:5px;"></div></span><span data-title="FILE REQUESTS&nbsp;&nbsp;&nbsp;&nbsp;">FILE REQUESTS</span></a>
            </div>

</html>