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
    $query = "select * from product";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="row mb-4">

        <?php
        while ($product = mysqli_fetch_array($result)) {
            $price = $product[2];
            $disount = $product[4];
            $discountedinpercent = $disount / 100;
            $discountedprice = $price * $discountedinpercent;


            ?>
            <div class="col-3">
                <!--                style="width: 18rem;"-->
                <div class="card">
                    <h5 class="card-title" style="font-size: 18px;text-align: center"><?php echo $product[1]; ?></h5>
                    <img class="card-img-top" src="<?php echo $product[5]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-text"
                                   style="text-decoration:line-through red"><?php echo $product[2]; ?></p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p class="card-text"><?php echo $discountedprice; ?></p>
                                <!--                                <p class="card-text ">-->
                                <?php //echo $product[4]; ?><!--% off</p>-->

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center">
                                <a href="#?productid=<?php echo $product[0]; ?>" style="justify-content: center"
                                   class="btn btn-primary">Add to cart</a>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center">
                                <a href="productdescription.php?productid=<?php echo $product[0]; ?>"
                                   style="justify-content: center;text-decoration:underline yellow" class="text-primary">Quick view</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
