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
    include_once 'connection.php';
    include 'adminheader.php';
    ?>
</head>
<body>
<div class="container" style="">
    <div class="row justify-content-center">
        <h1>Add Sub Category</h1>
    </div>
    <form action="addsubcategoryaction.php" method="post" id="form1">
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
            <select name="categoryname" id="categoryname" class="input-field" data-rule-required="true"
                    data-msg-required="Category must be selected">
                <option value="">Select category</option>
                <?php
                $qury = "select categoryname from category";
                $res = mysqli_query($conn, $qury);
                while ($category = mysqli_fetch_assoc($res)) {
                    ?>

                    <option value="<?php echo $category["categoryname"]; ?>"><?php echo $category["categoryname"]; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="subcategoryname" class="font-weight-bolder"><u>Sub Category Name</u></label>
            <input type="text" name="subcategoryname" id="subcategoryname" data-rule-required="true"
                   data-msg-required="Sub Category name is mandatory" placeholder="enter sub category name"
                   class="input-field">
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="subcategorydescription" class="font-weight-bolder"><u>Sub Category Description</u></label>
            <textarea name="subcategorydescription" id="subcategorydescription" data-rule-required="true"
                      data-msg-required="Description must be entered" class="input-field" cols="20" rows="5"
                      placeholder="enter sub category description "></textarea>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <input type="submit" value="submit" class="btn btn-warning">
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <?php
            if (isset($_REQUEST['er'])) {
                $val = $_REQUEST['er'];
                if ($val == 0) {
                    echo '<div class="alert alert-danger">
                        Sub Category already Exist
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
                } elseif ($val == 1) {
                    echo '<div class="alert alert-success">
                        Sub Category added Successfully
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
                } elseif ($val == 2) {
                    echo '<div class="alert alert-warning">
                        Try again Later
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
                }
            }
            ?>
        </div>
    </form>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php