<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Product</title>

    <?php
    include 'headerfiles.html';
    ?>
</head>
<body>

<?php
include_once "adminheader.php";
?>

<div class="container-fluid">
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
                    <select name="subcategory" class="input-field" id="subcategory" onchange="show_product(this.value)">
                        <option value="">Select Sub Category</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- table -->
    <div class="container">
        <div class="table-responsive" id="productdiv"></div>
    </div>
</div>

<div class="row form-group col-md-8 justify-content-center offset-2">
    <?php
    if (isset($_REQUEST['er'])) {
        $val = $_REQUEST['er'];
        if ($val == 0) {
            echo '<div class="alert alert-success">
                        Product Edited Successfully
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        } elseif ($val == 1) {
            echo '<div class="alert alert-danger">
                        Try Again Later
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        } elseif ($val == 2) {
            echo '<div class="alert alert-warning">
                                Please select jpg or png image only
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        } elseif ($val == 3) {
            echo '<div class="alert alert-warning">
                                                Image size must be less than 100 kb
                        <span class="close" data-dismiss="alert">&times;</span>
                            </div>';
        }
    }
    ?>
</div>

<?php
include_once 'footer.php';
?>
<script>
    $(document).ready(function () {
        show_product('');
    })
</script>
</body>
</html>