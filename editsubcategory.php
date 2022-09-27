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
<?php
include 'adminheader.php';
$subcatid = $_REQUEST['subcatid'];
$s = "SELECT * FROM `subcategory` where `subcategoryid`='$subcatid'";
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
?>
<body>
<div class="container">
    <div class="row
     justify-content-center">
        <h1>Edit Sub Category</h1>
    </div>
    <form action="updatesubcategory.php" method="post" id="form1">
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

                    <option value="<?php echo $category["categoryname"]; ?>"
                            <?php if (($row['category']) == $category['categoryname'])   { ?>selected<?php } ?>><?php echo $category["categoryname"]; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="subcategoryname" class="font-weight-bolder"><u>Sub Category Name</u></label>
            <input type="text" name="subcategoryname" id="subcategoryname" data-rule-required="true"
                   value="<?php echo $row[1]; ?>"
                   data-msg-required="Sub Category name is mandatory" placeholder="enter sub category name"
                   class="input-field">
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <label for="subcategorydescription" class="font-weight-bolder"><u>Sub Category Description</u></label>
            <textarea name="subcategorydescription" id="subcategorydescription" data-rule-required="true"
                      data-msg-required="Description must be entered" class="input-field" cols="20" rows="5"
                      placeholder="enter sub category description "><?php echo $row[2]; ?></textarea>
        </div>
        <div class="row form-group col-md-8 justify-content-center offset-2">
            <input type="hidden" name="subcatid" value="<?php echo $row[0]; ?>">
            <input type="submit" value="submit" class="btn btn-warning">
        </div>
    </form>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php