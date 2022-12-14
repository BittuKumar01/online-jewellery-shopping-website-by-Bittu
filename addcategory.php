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
    include 'adminheader.php'
    ?>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <h1>Add Category</h1>
    </div>
    <form action="insertcategory.php" method="post" id="form1">
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
            <input type="text" name="categoryname" id="categoryname" data-rule-required="true"
                   data-msg-required="Category name is mandatory" placeholder="enter category name" class="input-field">
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="categorydescription" class="font-weight-bolder"><u>Category Description</u></label>
            <textarea name="categorydescription" id="categorydescription" data-rule-required="true"
                      data-msg-required="Description must be entered" class="input-field" cols="20" rows="5"
                      placeholder="enter category description "></textarea>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
    <?php
    if (isset($_REQUEST['er'])) {
        $val = $_REQUEST['er'];
        if ($val == 1) {
            echo '<div class="alert alert-success">
             Category added Successfully   
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
        } elseif ($val == 2) {
            echo '<div class="alert alert-danger">
            Category insert failed
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
        } elseif ($val == 0) {
            echo '<div class="alert alert-info">
            Category Already exist
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
        }
    }
    ?>

</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php