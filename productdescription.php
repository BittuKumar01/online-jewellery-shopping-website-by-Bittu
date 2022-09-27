<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'publicheader.php';
    include_once 'connection.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    $productid = $_GET['productid'];
    $query = "select * from product where productid='$productid'";
    $result = mysqli_query($conn, $query);
    while ($product = mysqli_fetch_array($result)) {
        $price = $product[2];
        $disount = $product[4];
        $discountedinpercent = $disount / 100;
        $discountedprice = $price * $discountedinpercent;
        $profit = $price - $discountedprice;
        ?>

        <div class="row justify-content-center">
            <h1><?php echo $product[1]; ?></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5" style="border-style: groove;margin-bottom: inherit;margin-right: 5px">
                <div class="row">
                    <div class="col-sm-5">
                        <?php
                        $query2 = "select * from product_photo where productid='$productid'";
                        $res = mysqli_query($conn, $query2); ?>

                        <img src="<?php echo $product[5]; ?>" class="img-fluid img-responsive img-rounded"
                             style="height: 150px;width: 100px" id=""
                             onmouseover="changePhoto('<?php echo $product[5]; ?>')">
                        <?php
                        while ($photo = mysqli_fetch_array($res)) {
                            ?>
                            <!--                            <div class="col-sm-5 mb-4">-->
                            <img src="<?php echo $photo[1]; ?>" class="img-fluid img-rounded img-responsive"
                                 style="height: 150px;width: 100px"
                                 alt="" onmouseover="changePhoto('<?php echo $photo[1]; ?>')">
                            <!--                            </div>-->
                            <?php
                        }

                        ?>
                    </div>
                    <div class="col-sm-7">
                        <img src="<?php echo $product[5]; ?>" class="img-fluid img-responsive img-rounded"
                             style="height: 500px" id="coverPhoto">
                    </div>
                </div>
            </div>
            <div class="col-sm-5" style="border-style: groove;border-color: whitesmoke;margin-bottom: inherit">
                <div class="row justify-content-center">
                    <h5><?php echo $product[1]; ?></h5>
                </div>
                <div class="row" style="border: groove white;margin-right: 10px;margin-left: 10px;margin-bottom: 10px">
                    <div class="col-sm-6">
                        <p><i class="fa fa-2x fa-rupee-sign text-info"></i><?php echo $discountedprice; ?>&nbsp;&nbsp;
                            <span style="text-decoration: line-through red;font-size: 13px"><i
                                        class="fa fa-rupee-sign"></i><?php echo $price; ?>
                        </span></p>

                    </div>
                    <div class="col-sm-6">
                        <p></p>
                        <p style="font-size: 13px">You save <i
                                    class="fa fa-rupee-sign text-info"></i><?php echo $profit; ?>&nbsp;&nbsp;
                            <span>(<?php echo $discountedinpercent * 100; ?>%)
                        </span></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="input-group quantity" style="margin-left: 30%">
                        <span class="input-group-btn">
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-info noBorder-right"
                                onclick="lessqty(<?php echo $product[0]; ?>)"><i class="fa fa-minus"></i></button>
                        </span>
                        <input type="text" name="quantity" style="max-width: 100px" value="1" size="1" readonly=""
                               class="form-control text-center">
                        <span class="input-group-btn">
                        <button type="button" onclick="addqty(<?php echo $product[0]; ?>)" data-toggle="tooltip"
                                title="Update"
                                class="btn btn-info"><i class="fa fa-plus"></i></button>
                        </span>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <p><?php echo $product[6]; ?></p>
                </div>
                <div class="row justify-content-center">
                    <input type="submit" value="Add to cart" class="btn btn-warning">
                </div>
            </div>
        </div>
        <?php
    }
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
