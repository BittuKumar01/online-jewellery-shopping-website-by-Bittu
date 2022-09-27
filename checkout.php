<?php
include "cart.php";
?>
<!doctype html>
<html>
<head>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <?php
    include "headerfiles.html";
    ?>
</head>

<body>

<?php
include "userheader.php";
@session_start();
$cart = $_SESSION['products'];
//var_dump($cart);
//print_r($cart);
?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Login Coupon Accordion Start -->
                    <div class="checkoutaccordion" id="checkOutAccordion">


                    </div>
                    <!-- Checkout Login Coupon Accordion End -->
                </div>
            </div>
            <form action="insertPayment.php" id="checkoutForm" method="post">
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h5 class="checkout-title">Billing Details</h5>
                            <div class="billing-form-wrap">


                                <div class="single-input-item">
                                    <label for="streetaddress" class=" mt-20">Street address</label>
                                    <textarea id="address" data-rule-required="true"
                                              data-msg-required="Enter a valid address so that we can reach you"
                                              name="address" placeholder="Enter full address"
                                    ></textarea>
                                </div>


                                <div class="single-input-item">
                                    <label for="city" class="">Town / City</label>
                                    <select name="city" data-rule-required="true"
                                            data-msg-required="City must be selected" id="town">
                                        <option value="">--Choose City--</option>
                                        <option value="Ajnala">Ajnala</option>
                                        <option value="Amritsar">Amritsar</option>
                                        <option value="Bathinda">Bathinda</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Hoshiarpur">Hoshiarpur</option>
                                        <option value="Jalandhar">Jalandhar</option>
                                        <option value="Jandiala">Jandiala</option>
                                        <option value="Kapurthala">Kapurthala</option>
                                        <option value="Kharar">Kharar</option>
                                        <option value="Ludhiana">Ludhiana</option>
                                        <option value="Nawanshahr">Nawanshahr</option>
                                        <option value="Panchkula">Panchkula</option>
                                        <option value="Pathankot">Pathankot</option>
                                        <option value="Rajpura">Rajpura</option>
                                        <option value="Roorkee">Roorkee</option>
                                    </select>
                                    <!--                                    <input type="text" name="town" id="town" placeholder="Town / City" required/>-->
                                </div>


                                <div class="single-input-item">
                                    <label for="postcode" class="">Postcode / ZIP</label>
                                    <input type="text" id="zipcode" name="zipcode" data-rule-required="true"
                                           data-msg-required="Please enter a valid zip code or postal code"
                                           placeholder="Postcode / ZIP" minlength="6" maxlength="6" data-rule-number="true">
                                </div>

                                <div class="single-input-item">
                                    <label for="ordernote">Order Note</label>
                                    <textarea name="remarks" id="remarks" cols="30" rows="3"
                                              placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h5 class="checkout-title">Your Order Summary</h5>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $grandTotal = 0;
                                        foreach ($cart as $product) {
                                            $price = $product->price;
                                            $qty = $product->qty;
                                            $total = $price * $qty;
                                            $discountedPrice = round($product->price - (($product->price * $product->discount) / 100), 2);
                                            $netprice = $discountedPrice * $product->qty;
                                            $grandTotal += $netprice;
                                            ?>

                                            <tr>
                                                <td><a href="product-details.php"><?php echo $product->productname; ?>
                                                        <strong> &nbsp;&nbsp;(<?php echo $discountedPrice; ?>
                                                            × <?php echo $product->qty; ?>)</strong></a>
                                                </td>
                                                <td><?php echo $netprice; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td>Total Amount</td>
                                            <td><strong><?php echo $grandTotal; ?>
                                                    <input type="hidden" name="grandTotal" id="grandTotal"
                                                           value="<?php echo round($grandTotal, 0) ?>">
                                                </strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="cash"
                                                       class="custom-control-input" checked/>
                                                <label class="custom-control-label" for="cashon">Cash On
                                                    Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="Online"
                                                       class="custom-control-input"/>
                                                <label class="custom-control-label" for="directbank">Online</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as the payment reference. Your order will not be shipped until the
                                                funds have cleared in our account..</p>
                                        </div>
                                    </div>

                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-20">
                                            <input type="checkbox" checked class="custom-control-input" id="terms"
                                            />
                                            <label class="custom-control-label" for="terms">I have read and agree to
                                                the website <a href="index.php">terms and conditions.</a></label>
                                        </div>
                                        <!--                                        <button type="submit" id="placeOrder" class="btn btn-sqr">Place Order</button>-->
                                        <input type="submit" value="Place Order" id="placeOrder" class="btn btn-sqr">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- checkout main wrapper end -->
</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Scroll to Top End -->
<?php
include "footer.php";
?>
<script src="dist/jquery.validate.js"></script>
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $("#checkoutForm").validate();-->
<!---->
<!--    });-->
<!--</script>-->
</body>
</html>