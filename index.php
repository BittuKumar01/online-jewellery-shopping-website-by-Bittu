<?php
include "cart.php";
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Home</title>

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
    <!-- hero slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/home1-slide1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <h2 class="slide-title">Jewellery <span>Collection</span></h2>
                                    <!--                                    <h4 class="slide-desc">Small Kids toy collection</h4>-->
                                    <!--                                    <a href="shop.html" class="btn btn-hero">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/home1-slide3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-2 float-md-right float-none">
                                    <h2 class="slide-title" style="color: #1DA1F2;background-color: transparent">
                                        Jewellery <span>Collection</span>
                                    </h2>
                                    <!--                                    <h4 class="slide-desc">SAS Metal and all other </h4>-->
                                    <!--                                    <a href="shop.html" class="btn btn-hero">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/home3-slide2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-3">
                                    <h2 class="slide-title text-warning">Grace Designer<span>Jewellery</span></h2>
                                    <h4 class="slide-desc text-primary">Rings, Occasion Pieces, Pandora & More.</h4>
                                    <!--                                    <a href="shop.html" class="btn btn-hero">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item end -->
        </div>
    </section>
    <!-- hero slider area end -->


    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">our products</h2>
<!--                        <p class="sub-title">Add our products to weekly lineup</p>-->
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                        <!-- product item start -->
                        <?php
                        if (isset($_REQUEST['q'])) {
                            $subcatid = $_REQUEST['q'];
                            $product = "SELECT * FROM `product` where subcatid='$subcatid'";
                        } else {
                            $product = "SELECT * FROM `product`";
                        }
                        $product_result = mysqli_query($conn, $product);
                        if (mysqli_num_rows($product_result) > 0) {
                            while ($product_row = mysqli_fetch_array($product_result)) {
                                ?>
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.php?q=<?php echo $product_row[0] ?>">
                                            <img class="pri-img" src="<?php echo $product_row['photo'] ?>"
                                                 alt="product">
                                            <img class="sec-img" src="<?php echo $product_row['photo'] ?>"
                                                 alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span><?php echo $product_row['discount'] ?>% OFF</span>
                                            </div>
<!--                                            <div class="product-label discount">-->
<!--                                                <span>--><?php //echo $product_row['discount'] ?><!--%</span>-->
<!--                                            </div>-->
                                        </div>
                                        <div class="button-group">
                                            <a href="product-details.php?q=<?php echo $product_row[0] ?>">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View">
<!--                                                    <i class="pe-7s-eye"></i>-->
<!--                                                    <i class="bi bi-eye-fill"></i>-->
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="cart-hover">
                                            <button class="btn btn-cart"
                                                <?php if ($product_row['stock'] > 0) { ?>
                                                    onclick="addToCart(<?php echo $product_row[0] ?>,1)">add to cart
                                                <?php
                                                }
                                                else {
                                                    echo ">Out of Stcok";
                                                }
                                                ?>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">

                                        <h6 class="product-name">
                                            <a href="product-details.php?q=<?php echo $product_row[0] ?>"><?php echo $product_row['productname'] ?></a>
                                        </h6>
                                        <div class="price-box">
                                        <span class="price-regular">&#8377;
                                            <?php
                                            if (!empty($product_row['discount']) && $product_row['discount'] > 0) {
                                                $discountedPrice = $product_row['price'] - ($product_row['price'] * $product_row['discount'] / 100);
                                                echo $discountedPrice;
                                            } else {
                                                echo $product_row['price'];
                                            }
                                            ?>
                                        </span>
                                            <?php
                                            if (!empty($product_row['discount']) && $product_row['discount'] > 0) {
                                                ?>
                                                <span class="price-old"><del>&#8377; <?php echo $product_row['price'] ?></del></span>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="text-center text-danger">No Data Found</div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- product banner statistics area end -->

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
</html>
