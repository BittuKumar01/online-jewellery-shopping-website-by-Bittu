<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Orders</title>
    <?php
    include_once 'headerfiles.html';
    ?>
</head>
<body>
<?php
include_once 'adminheader.php';
?>
<div class="container">
    <?php
    $billid = $_GET["q"];
    $fullname = $_GET["r"];
    $mobile = $_GET["s"];
    ?>
    <form action="orderreceivedaction.php" id="for1" method="post">
        <div class="row col-sm-6">
            <label for="person">Order received by: </label>
        </div>
        <div class="row col-sm-6">
            <input type="text" name="person" id="person" class="form-control">
        </div>
        <div class="row col-sm-6 justify-content-end mt-4">
            <input type="text" value="<?php echo $billid; ?>" class="form-control" name="billid" id="billid">
            <input type="text" value="<?php echo $fullname; ?>" class="form-control" name="fullname" id="fullname">
            <input type="text" value="<?php echo $mobile; ?>" class="form-control" name="mobile" id="mobile">

            <input type="submit" name="" id="" value="Add" class="w-50 h-100 btn btn-success text-primary">
        </div>
    </form>

    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
