<?php
include "cart.php";
@session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<title>Thankyou</title>

<!-- Head -->
<head>
    <?php
    include "headerfiles.html";
    ?>
</head>
<body>

<!-- banner -->
<?php
if (!isset($_SESSION["email"])) {
    include "publicheader.php";
    $email = "";
} else {
    include "userheader.php";
}
?>
<!-- //banner -->

<div class="bhoechie-tab-content">
    <div class="container">
        <div class="jumbotron text-center">
            <div class="text-success">
                <i class="fas fa-check-circle fa-8x"></i>
            </div>
            <h5 class="mt-3">
                Thank you for Booking with us. Your Booking ID is <?php echo $_REQUEST['q']; ?>
            </h5>
        </div>
    </div>

</div>
<?php
include "footer.php"
?>
</body>
<!-- //Body -->
</html>