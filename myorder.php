<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>

    <?php
    include_once 'headerfiles.html';
    ?>
</head>
<body>

<?php
include_once 'userheader.php';
?>

<div class="container">
    <div class="text-center">
        <h2 class="text-info" style="text-decoration: underline">My Orders</h2>
    </div>

    <div class="py-5">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sr.&nbsp;No.</th>
                    <th>Bill&nbsp;Id</th>
                    <th style="min-width: 180px;">Bill&nbsp;Date&nbsp;&&nbsp;Time</th>
                    <th>Address</th>
                    <th>Payment&nbsp;Method</th>
                    <th>Grand&nbsp;Total</th>
                    <th>Status</th>
                    <th>View&nbsp;Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $k = 0;
                $email = $_SESSION["email"];

                $order = "SELECT * FROM `bill` where email='$email' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $order);
                while ($bill = mysqli_fetch_array($result)) {
                    $k++;
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $bill["id"]; ?></td>
                        <td><?php echo $bill["datetime"]; ?></td>
                        <td><?php echo $bill["address"] . "   " . $bill["city"] . "   " . $bill["zipcode"]; ?></td>
                        <td class="text-capitalize"><?php echo $bill["paymentmethod"]; ?></td>
                        <td>&#x20b9;<?php echo round($bill["grandtotal"]); ?></td>
                        <td class="text-capitalize"><?php echo $bill["status"]; ?></td>
                        <td><a href="billdetail.php?q=<?php echo $bill["id"]; ?>"><i
                                        class="fa fa-s15 fa-info-circle"></i></a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>

</body>
</html>