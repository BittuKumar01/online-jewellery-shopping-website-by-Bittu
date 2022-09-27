<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "headerfiles.html";
    ?>
    <title>Document</title>
</head>
<body>
<?php
include "userheader.php";
?>
<div class="container">
    <form action="userupdatepassword.php" id="form1" method="post" enctype="multipart/form-data">
        <div class="row ml-3 justify-content-center">
            <div class="input-containder">
                <h1 class="text-danger input-field">Change Password</h1>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-5 offset-4 mr-3">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-lock"></i>
                        <input type="password" name="oldpassword" id="oldpassword"
                               placeholder="enter old password"
                               data-rule-required="true" data-msg-required="Please enter old password"
                               class="input-field">
                    </div>
                </div>

                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-lock"></i>
                        <input type="password" name="newpassword" id="newpassword"
                               placeholder="enter new password"
                               data-rule-required="true" data-msg-required="Please enter new password"
                               class="input-field">
                    </div>
                </div>
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-lock"></i>
                        <input type="password" name="newconpassword" id="newconpassword"
                               placeholder="enter confirm password"
                               data-rule-required="true" data-msg-required="Please enter confirm new password"
                               data-rule-equalto="#newpassword"
                               data-msg-equalto="New Password and confirm new password must be same"
                               class="input-field">
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="input-container justify-content-center">
                <input type="submit" value="submit"
                       class="btn btn-success w-25">
            </div>

    </form>
    <?php
    if (isset($_REQUEST['er'])) {
        $val = $_REQUEST['er'];
        if ($val == 2) {
            echo '<div class="alert alert-danger">
                        Password changed successfully
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        }
        if ($val == 3) {
            echo '<div class="alert alert-danger">
                        Old Password does not match
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        }

    }
    include_once 'footer.php';
    ?>

</div>

</body>
</html>
<?php
