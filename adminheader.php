<?php
ob_start();
include_once "connection.php";
@session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("location:loginpage.php");
}
?>

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
                            <p>Welcome to shopping center</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center justify-content-end">
                                <li class="language">
                                    <i class="fa fa-user"></i> Welcome, <span
                                            class="text-capitalize"><?php echo $username; ?></span>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="admin_changepassword.php">Change Password</a></li>
                                        <li><a href="adminlogout.php">logout <i class="fa fa-power-off"></i></a></li>
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
                    <div class="col-lg-8 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="index.php">Home </a></li>

                                        <li class="position-static">
                                            <a href="#">Admin <i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><span></span>
                                                    <ul>
                                                        <li><a href="add_admin.php">Add Admin</a></li>
                                                        <li><a href="show_admin.php">View Admin</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="position-static"><a href="#">Category <i
                                                        class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><span></span>
                                                    <ul>
                                                        <li><a href="addcategory.php">Add Category</a></li>
                                                        <li><a href="showcategory.php">View Category</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="position-static"><a href="#">Sub Category <i
                                                        class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><span></span>
                                                    <ul>
                                                        <li><a href="addsubcategory.php">Add Sub Category</a></li>
                                                        <li><a href="showsubcategory.php">View Sub Category</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="position-static"><a href="#">Products<i
                                                        class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><span></span>
                                                    <ul>
                                                        <li><a href="addproduct.php">Add Products</a></li>
                                                        <li><a href="showproduct.php">View Products</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="position-static"><a href="#">Orders<i
                                                        class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><span></span>
                                                    <ul>
                                                        <li><a href="vieworder.php">Status Wise</a></li>
                                                        <li><a href="vieworderdatewise.php">Date Wise</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->
                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

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
                            <!--                            <div class="mini-cart-wrap">-->
                            <!--                                <a href="viewCart.php">-->
                            <!--                                    <i class="pe-7s-shopbag"></i>-->
                            <!--                                    <div class="notification">0</div>-->
                            <!--                                </a>-->
                            <!--                            </div>-->
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

    <?php
    include_once "mobilemenu.php";
    ?>
</header>
<!-- end Header Area -->





