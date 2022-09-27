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
//$photoid = $_GET["photoid"];

include_once 'adminheader.php';
$photoid = $_REQUEST['photoid'];
$query = "select * from product_photo INNER join product ON product_photo.productid = product.productid where product_photo.id ='$photoid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);


//echo $pid;
?>
<div class="container">
    <div class="row">
        <h1>Edit Photo</h1>
    </div>
    <form action="updatephoto.php" method="post" enctype="multipart/form-data" id="form1">
        <div class="row input-container">
            <div class="col-sm-5">
                <label for="photo">Photo</label>
            </div>
            <div class="col-sm-5 ml-5">
                <div class="row">
                    <div class="col-sm-5">
                        <img style="width: 100px;height: 100px" src="<?php echo $row[1] ?>" alt="">
                    </div>
                    <div class="col-sm-7">
                        <input type="file" data-rule-extension="jpg|png|gif" class="input-field"
                               name="photo" id="photo">
                    </div>
                </div>

            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-5">
                <label for="caption">Caption</label>
            </div>
            <div class="col-sm-5 ml-5">
                <input type="text" class="input-field" data-rule-required="true" value="<?php echo $row[2]; ?>"
                       name="caption" id="caption">
                <input type="hidden" class="input-field" data-rule-required="true" value="<?php echo $row[3]; ?>"
                       name="productid" id="productid">
                <input type="hidden" class="input-field" data-rule-required="true" value="<?php echo $photoid; ?>"
                       name="photoid" id="photoid">
            </div>

        </div>
        <div class="row input-container">
            <div class="col-sm-5"></div>
            <div class="col-sm-5 ml-5">
                <input type="submit" value="Add Photo" class="btn btn-success input-field">
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
