<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.html";
    ?>
</head>
<body>
<?php
include_once 'adminheader.php';
$pid = $_GET["productid"];
//echo $pid;
?>
<div class="container">
    <div class="row">
        <h1>Add Photo</h1>
    </div>
    <form action="insertphoto.php" method="post" enctype="multipart/form-data" id="form1">
        <div class="row input-container">
            <div class="col-sm-5">
                <label for="photo">Photo</label>
            </div>
            <div class="col-sm-5 ml-5">
                <input type="file" data-rule-extension="jpg|png|gif" class="input-field" data-rule-required="true"
                       name="photo" id="photo">
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-5">
                <label for="caption">Caption</label>
            </div>
            <div class="col-sm-5 ml-5">
                <input type="text" class="input-field" data-rule-required="true" name="caption" id="caption">
                <input type="hidden" class="input-field" data-rule-required="true" value="<?php echo $pid; ?>"
                       name="productid" id="productid">
            </div>

        </div>
        <div class="row input-container">
            <div class="col-sm-5"></div>
            <div class="col-sm-5 ml-5">
                <input type="submit" value="Add Photo" class="btn btn-success input-field">
            </div>
        </div>
    </form>

</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php
