<table class="table table-bordered">
    <thead>
    <tr>
        <th class="text-center">Sr No.</th>
        <th class="text-center">Order No.</th>
        <th class="text-center">Date Time</th>
        <th class="text-center">Grand Total</th>
        <th class="text-center">Payment Mode</th>
        <th class="text-center">User Detail</th>
        <th class="text-center text-primary" colspan="2">Controls</th>
    </tr>
    </thead>
    <tbody>
<?php
include_once 'connection.php';

$fromdate = $_GET["q"];
$todate = $_GET["r"];
$status = $_GET["s"];
$ar = array();
$k = 0;
$sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE  datetime between '$fromdate' and '$todate' and status ='$status'";
$result = mysqli_query($conn, $sql1);
while ($order = mysqli_fetch_array($result)) {
$k++;
?>

    <tr>
        <td class="text-center text-dark"><?php echo $k; ?></td>
        <td class="text-center text-dark"><?php echo $order["id"]; ?></td>
        <td class="text-center text-dark"><?php echo $order["datetime"]; ?></td>
        <td class="text-center text-dark"><?php echo $order["grandtotal"]; ?></td>
        <td class="text-center text-dark"><?php echo $order["paymentmethod"]; ?></td>
        <td class="text-center text-dark">
            <div class="row"><?php echo $order["email"]; ?></div>
            <div class="row"><?php echo $order["fullname"]; ?></div>
            <div class="row"><?php echo $order["mobile"]; ?></div>
        </td>
        <td class="text-center text-info"><a
                    href="vieworderdetail.php?q=<?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=<?php echo $order['mobile']; ?>">View
                Detail</a></td>
        <td class="text-center text-success"><a
                    href="shiporder.php?q=<?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=<?php echo $order['mobile']; ?>">Ship
                Order</a>
        </td>
    </tr>
    <?php
    }
    ?>

    <!--    --><?php
    //    $k = 0;
    //    $fromdate = $_GET["q"];
    //    $todate = $_GET["r"];
    //    if (isset($fromdate) and isset($todate)) {
    //        $sql = "select * from bill inner JOIN signup on bill.email = signup.email where datetime between '$fromdate' and '$todate'";
    //    }
    //    $result = mysqli_query($conn, $sql);
    //    while ($order = mysqli_fetch_array($result)) {
    //        $k++;
    //        ?>

    <!--        --><?php
    //    }
    //    ?>
    <!--    </tbody>-->
    <!---->
