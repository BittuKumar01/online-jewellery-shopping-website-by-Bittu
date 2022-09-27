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
include_once 'adminheader.php';
$productid = $_REQUEST['productid'];
$query = "SELECT * FROM `product` INNER join subcategory  on  product.subcatid = subcategory.subcategoryid where productid ='$productid'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<div class="container">
    <form action="updateproduct.php" id="form1" method="post" enctype="multipart/form-data">
        <div class="row text-primary justify-content-center mb-4 mt-3">
            <h1>Edit Product</h1>
        </div>
        <div class="row input-container">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="category" class="">Category</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="category" class="input-field" id="category" onchange="showsubcat(this.value)">
                            <option value="">Select Category</option>
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
                </div>

            </div>
            <div class="col-sm-6" id="subcat">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="subcategory" class="">Sub Category</label>

                    </div>
                    <div class="col-sm-8">
                        <select name="subcategory" class="input-field" id="">
                            <option value="">Select Sub Category</option>
                            <?php
                            $qury = "select * from subcategory";
                            $res = mysqli_query($conn, $qury);
                            while ($category = mysqli_fetch_assoc($res)) {
                                ?>
                                <option value="<?php echo $category["subcategoryid"]; ?>"
                                        <?php if ($row['subcatid'] == $category['subcategoryid'])   { ?>selected<?php } ?>><?php echo $category["subcategoryname"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>

        </div>
        <div class="row input-container">
            <!--        <div class="col-sm-6">-->
            <!--            <div class="row">-->
            <!--                <div class="col-sm-4">-->
            <!--                    <label for="subcategory" class="">Sub Category</label>-->
            <!---->
            <!--                </div>-->
            <!--                <div class="col-sm-8">-->
            <!--                    <select name="subcategory" class="input-field" id="subcategory">-->
            <!--                        <option value="">Select Sub Category</option>-->
            <!--                        <option value="">--><?php //?><!--</option>-->
            <!--                    </select>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--        </div>-->
        </div>
        <div class="row input-container">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="productname" class="">Product Name</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" data-rule-required="true" value="<?php echo $row[1]; ?>" class="input-field"
                               name="productname" id="productname">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="photo">Photo</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" class="input-field" name="photo" id="photo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="price" data-rule-required="true" class="">Price</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" data-rule-required="true" class="input-field"
                               value="<?php echo $row[2]; ?>" name="price" id="price">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="stock">Stock</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" data-rule-required="true" class="input-field" value="<?php echo $row['stock']; ?>" name="stock" id="stock">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="discount">Discount</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" data-rule-required="true" class="input-field" value="<?php echo $row['discount']; ?>" name="discount" id="discount">
                    </div>
                </div>
            </div>
            <!--            <div class="col-sm-6">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-sm-4">-->
            <!--                        <label for="price" data-rule-required="true" class="">Price</label>-->
            <!--                    </div>-->
            <!--                    <div class="col-sm-8">-->
            <!--                        <input type="number" data-rule-required="true" class="input-field" value="-->
            <?php //echo $row[2]; ?><!--" name="price" id="price">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-sm-4">-->
            <!--                        <label for="stock">Stock</label>-->
            <!--                    </div>-->
            <!--                    <div class="col-sm-8">-->
            <!--                        <input type="number" data-rule-required="true" class="input-field" value="-->
            <?php //echo $row[3]; ?><!--" name="stock" id="stock">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
        <div class="row input-container">
            <div class="col-sm-2">
                <label for="description" class="">Description</label>
            </div>
            <div class="col-sm-6">
                <textarea name="description" data-rule-required="true" id="description" class="input-field" cols="50"
                          rows="5"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="col-sm-4">
                <img style="height: 100px;width: 100px" src="<?php echo $row[6]; ?>" alt="">
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-8 offset-2">
                <input type="hidden" name="productid" data-rule-required="true" value="<?php echo $row[0]; ?>">
                <input type="submit" class="btn btn-info btn-lg" value="Update">
            </div>
        </div>
    </form>
</div>

<?php
include_once 'footer.php';
?>

</body>
</html>