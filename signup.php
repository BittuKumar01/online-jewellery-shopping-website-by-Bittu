<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Signup</title>

    <?php
    include 'headerfiles.html';
    ?>
</head>
<body>
<?php
include_once 'publicheader.php';
?>
<div class="container">
    <form action="insertuser.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="row ml-3 justify-content-center">
            <div class="input-containder">
                <h1 class="text-danger input-field">User Signup</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-envelope-square"></i>
                        <input type="email" name="email" id="email" placeholder="enter your email address"
                               data-rule-required="true" data-msg-required="Please enter a valid email address"
                               class="input-field">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 ml-5">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-circle"></i>
                        <input type="text" name="fullname" id="fullname"
                               placeholder="enter your name"
                               data-rule-required="true" data-msg-required="Please enter name"
                               class="input-field">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-lock"></i>
                        <input type="password" name="password" id="password"
                               placeholder="enter secure password"
                               data-rule-required="true" data-msg-required="Please enter password"
                               class="input-field"><span><i
                                    class="fa fa-eye-slash" id="eyeslash" onclick="showpassword()"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 ml-5">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-lock"></i>
                        <input type="password" name="conpassword" id="conpassword"
                               placeholder="enter confirm password"
                               data-rule-required="true" data-msg-required="Please enter confirm password"
                               data-rule-equalto="#password"
                               data-msg-equalto="Password and confirm password must be same"
                               class="input-field">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-phone-alt"></i>
                        <input type="number" name="mobile" id="mobile"
                               placeholder="enter a valid mobile number"
                               data-rule-required="true" data-msg-required="Please enter a valid mobile number"
                               class="input-field" minlength="10" maxlength="12">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 ml-5">
                <div class="row">
                    <div class="input-container justify-content-center">
                        <input type="submit" value="Register" class="btn btn-success py-3 px-5" style="font-size: 1.3rem;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        </div>
    </form>
    <?php
    if (isset($_REQUEST["msg"])) {
        $msg = $_REQUEST["msg"];
        echo "$msg";
    }
    ?>
</div>
<?php
include "footer.php";
?>
</body>
</html>
<?php
