<?php
include "connection.php";
?>
<!-- Start Header Area -->
<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <div class="header-top bdr-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome-message">
                            <p>Welcome to Online Jewellery Store</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center justify-content-end">
                                <!--                                <li class="curreny-wrap">-->
                                <!--                                    $ Currency-->
                                <!--                                    <i class="fa fa-angle-down"></i>-->
                                <!--                                    <ul class="dropdown-list curreny-list">-->
                                <!--                                        <li><a href="#">$ USD</a></li>-->
                                <!--                                        <li><a href="#">€ EURO</a></li>-->
                                <!--                                    </ul>-->
                                <!--                                </li>-->
                                <li class="language">
                                    <i class="fa fa-user"></i>
                                    <!--                                    Login/Signup-->
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="userloginpage.php">Login</a></li>
                                        <li><a href="signup.php">Signup</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-6 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="index.php">Home </a>

                                        </li>
                                        <li class="position-static"><a href="#">Shop <i
                                                        class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <?php
                                                $category = "SELECT * FROM `category` order by categoryname DESC LIMIT 0,4";
                                                $category_result = mysqli_query($conn, $category);
                                                while ($category_row = mysqli_fetch_array($category_result)) {
                                                    ?>
                                                    <li class="mega-title"><span><?php echo $category_row[0] ?></span>
                                                        <ul>
                                                            <?php
                                                            $subcategory = "SELECT * FROM `subcategory` where `category`='" . $category_row[0] . "'";
                                                            $subcategory_result = mysqli_query($conn, $subcategory);
                                                            while ($subcategory_row = mysqli_fetch_array($subcategory_result)) {
                                                                ?>
                                                                <li>
                                                                    <a href="index.php?q=<?php echo $subcategory_row[0] ?>"><?php echo $subcategory_row[1] ?></a>
                                                                </li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.php">Contact us</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a href="userloginpage.php">login</a></li>
                                            <li><a href="signup.php">register</a></li>
                                            <li><a href="userhome.php">my account</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="viewCart.php">
<!--                                        <a href="viewCart.php" class="minicart-btn">-->
                                            <i class="pe-7s-shopbag"></i>
                                            <div class="notification" id="cartCount">
                                                <?php
                                                if (isset($_SESSION['products'])) {
                                                    $ar = $_SESSION['products'];
                                                    echo count($ar);
                                                } else {
                                                    echo 0;
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="viewCart.php">
                                    <i class="pe-7s-shopbag"></i>
                                    <div class="notification">0</div>
                                </a>
                            </div>
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
    <!-- mobile header end -->

    <?php
    include_once "mobilemenu.php";
    ?>
</header>
<!-- end Header Area -->
