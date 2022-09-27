<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include 'headerfiles.html';
    ?>
</head>
<body>
<?php
include 'adminheader.php';
include_once 'connection.php';
$username = $_GET['username'];
$query = "select * from admin where username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<div class="container">
    <form action="updateadmin.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="row ml-3 justify-content-center">
            <div class="input-containder">
                <h1 class="text-danger input-field">Edit Your Profile</h1>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-5 offset-4 mr-3">
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-envelope-square"></i>
                        <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email"
                               placeholder="enter your email address"
                               data-rule-required="true" data-msg-required="Please enter a valid email address"
                               class="input-field">
                    </div>
                </div>

                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user"></i>
                        <input type="text" name="username" id="username"
                               placeholder="enter username" readonly
                               data-rule-required="true" data-msg-required="Please enter an unique username"
                               class="input-field" value="<?php echo $row["username"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-phone-alt"></i>
                        <input type="number" name="mobile" id="mobile"
                               placeholder="enter a valid mobile number"
                               data-rule-required="true" data-msg-required="Please enter a valid mobile number"
                               class="input-field" minlength="10" maxlength="10" value="<?php echo $row["mobile"] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-container">
                        <i class="icon fa fa-user-circle"></i>
                        <input type="text" name="fullname" id="fullname"
                               placeholder="enter your name"
                               data-rule-required="true" data-msg-required="Please enter name"
                               class="input-field" value="<?php echo $row['fullname'] ?>">
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="input-container justify-content-center">
                <input type="submit" value="submit"
                       class="btn btn-success w-25">
            </div>
        </div>

    </form>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
