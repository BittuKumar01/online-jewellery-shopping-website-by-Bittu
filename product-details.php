<?php
include "cart.php";
session_start();
$ar = array();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Product Detail</title>

    <?php
    include "headerfiles.html";
    ?>
</head>
<body>
<?php
if (isset($_SESSION["email"])) {
    include "userheader.php";
} else {
    include "publicheader.php";
}
?>

<main>
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <?php
                                    $mainphoto = "";
                                    if (isset($_REQUEST['q'])) {
                                        $productid = $_REQUEST['q'];
                                        if (isset($_SESSION['products'])) {
                                            $ar = $_SESSION['products'];
                                            $flag = 0;
                                            $qty = 1;
                                            foreach ($ar as $item) {
                                                if ($productid == $item->id) {
                                                    $qty = $item->qty;
                                                    $flag = 1;
                                                    break;
                                                }
                                            }
                                        }
                                        $product = "SELECT * FROM `product` where productid='$productid'";
                                    }
                                    $product_result = mysqli_query($conn, $product);
                                    if (mysqli_num_rows($product_result) > 0) {
                                    while ($product_row = mysqli_fetch_array($product_result)) {
                                    $mainphoto = $product_row['photo'];
                                    ?>
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?php echo $product_row['photo']; ?>" alt="product-details"/>
                                    </div>

                                    <div class="pro-large-img img-zoom">
                                        <img src="<?php echo $mainphoto; ?>"
                                             alt="product-details"/>
                                    </div>
                                    <?php
                                    $productphoto = "select * from product_photo where productid ='$productid'";
                                    $product_photo_result = mysqli_query($conn, $productphoto);
                                    while ($photo = mysqli_fetch_array($product_photo_result)) {
                                        ?>
                                        <div class="pro-large-img img-zoom">
                                            <img src="<?php echo $photo[1] ?>"
                                                 alt="product-details"/>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <?php
                                    $productphoto = "select * from product_photo where productid ='$productid'";
                                    $product_photo_result = mysqli_query($conn, $productphoto);
                                    while ($photo = mysqli_fetch_array($product_photo_result)) {
                                        ?>
                                        <div class="pro-nav-thumb">
                                            <img src="<?php echo $photo[1] ?>"
                                                 alt="product-details"/>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name"><?php echo $product_row['productname']; ?></h3>

                                    <?php
                                    if (!empty($product_row['discount']) && $product_row['discount'] > 0) {
                                        $discountedPrice = $product_row['price'] - ($product_row['price'] * $product_row['discount'] / 100);
                                        ?>
                                        <span class="price-regular" style="font-size: 1.1rem;">
                                        &#x20b9;<?php echo round($discountedPrice); ?>
                                        </span>

                                        <div class="price-box">
                                            <span class="price-old"><del>&#x20b9;<?php echo $product_row['price']; ?></del></span>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <span class="price-regular" style="font-size: 1.1rem;">
                                        &#x20b9;<?php echo round($product_row['price']); ?>
                                        </span>
                                        <?php
                                    }
                                    ?>


                                    <h5 class="offer-text"><strong>Hurry up</strong></h5>

                                    <div class="availability">
                                        <i class="fa fa-check-circle"></i>
                                        <span><?php echo $product_row['stock']; ?> in stock</span>
                                    </div>

                                    <p class="pro-desc"><?php echo $product_row['description']; ?></p>

                                    <div class="quantity-cart-box d-flex align-items-center">
                                        <?php
                                        if ($product_row['stock'] > 0) {
                                            ?>
                                            <h6 class="option-title">Quantity: </h6>

                                            <form id="myFormQty">
                                                <?php
                                                //                                            if ($product_row['stock'] > 0) {
                                                ?>
                                                <div class="row px-3">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text"
                                                                   value="<?php if (isset($_SESSION['products'])) {
                                                                       echo $qty;
                                                                   } else {
                                                                       echo 1;
                                                                   } ?>" name="qty" id="qty"
                                                                   data-rule-required="true"
                                                                   data-rule-min="1"
                                                                   data-msg-max=" " data-msg-min=" "
                                                                   data-rule-max="<?php echo $product_row['stock']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="action_link">
                                                        <button type="button" class="btn btn-cart2"
                                                                onclick="addToCart(<?php echo $product_row[0] ?>)">
                                                            Add To Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                        } else {
                                            ?>
                                            <button class="btn btn-danger btn-lg text-white"
                                                    style="cursor: not-allowed">Out Of Stock
                                            </button>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->
<?php
include "footer.php";
?>
</body>


<!-- Mirrored from demo.hasthemes.com/corano-preview/corano/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2019 05:57:06 GMT -->
</html>