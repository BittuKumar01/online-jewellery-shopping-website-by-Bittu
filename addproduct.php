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
?>
<div class="container">
    <form action="insertproduct.php" id="form1" method="post" enctype="multipart/form-data">
        <div class="row text-primary justify-content-center mb-4 mt-3">
            <h1>Add Product</h1>
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
                                <option value="<?php echo $category["categoryname"]; ?>"><?php echo $category["categoryname"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="col-sm-6" id="">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="subcategory" class="">Sub Category</label>

                    </div>
                    <div class="col-sm-8" id="subcategory">
                        <select name="subcategory" class="input-field" id="subcategory">
                            <option value="">Select Sub Category</option>
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
                        <input type="text" class="input-field" name="productname" id="productname">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="photo">Photo</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" class="input-field" name="photo" id="photo"
                               data-rule-extension="jpg|png|gif">
                    </div>
                </div>
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="price" class="">Price</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" class="input-field" name="price" id="price">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="discount">Discount</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="input-field" name="discount" placeholder="in %"
                                       id="discount">
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="stock">Stock</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="input-field" name="stock" id="stock">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-2">
                <label for="description" class="">Description</label>
            </div>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="input-field" cols="50" rows="5"></textarea>
            </div>
        </div>
        <div class="row input-container">
            <div class="col-sm-8 offset-2">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
    <div class="row form-group col-md-8 justify-content-center offset-2">
        <?php
        if (isset($_REQUEST['er'])) {
            $val = $_REQUEST['er'];
            if ($val == 0) {
                echo '<div class="alert alert-success">
                        Product Added Successfully
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
            } elseif ($val == 1) {
                echo '<div class="alert alert-danger">
                        Try Again Later
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
            } elseif ($val == 2) {
                echo '<div class="alert alert-warning">
                        Image size must be less than 100 kb
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
            } elseif ($val == 3) {
                echo '<div class="alert alert-warning">
                        Product already exists
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
            }
        }
        ?>
    </div>
    <br>
    <br>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php
