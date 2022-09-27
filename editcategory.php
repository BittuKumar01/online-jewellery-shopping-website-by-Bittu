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
<?php
include_once 'adminheader.php';
include_once 'connection.php';
$catname = $_REQUEST["catname"];
$query = "select * from category where categoryname='$catname'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

//print_r($row);
?>
<div class="container">
    <div class="row jumbotron justify-content-center">
        <h1>Edit Category</h1>
    </div>
    <form action="updatecategory.php" method="post" id="form1">
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
            <input type="text" name="categoryname" id="categoryname" data-rule-required="true"
                   readonly data-msg-required="Category name is mandatory" placeholder="enter category name"
                   class="input-field"
                   value="<?php echo "$row[categoryname]"; ?>">
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="categorydescription" class="font-weight-bolder"><u>Category Description</u></label>
            <textarea name="categorydescription" id="categorydescription" data-rule-required="true"
                      data-msg-required="Description must be entered" class="input-field" cols="20" rows="5"
                      placeholder="enter category description "
                      ><?php echo "$row[categorydescription]"; ?></textarea>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php