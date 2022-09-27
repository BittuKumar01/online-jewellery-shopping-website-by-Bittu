<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Orders</title>


    <?php
    include_once 'headerfiles.html';
    ?>

    <script>
        $(function () {
            $("#accordion").accordion({
                animate: 100
            });
        });
    </script>
</head>
<body>
<?php
include_once 'adminheader.php';
?>

<div class="container">
    <div class="py-5">
        <div class="text-center">
            <h1>All Orders</h1>
        </div>

        <div class="mt-2">
            <div id="accordion">
                <h3>Pending</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>Sr.&nbsp;No.</th>
                        <th>Order&nbsp;No.</th>
                        <th>Date&nbsp;Time</th>
                        <th>Grand&nbsp;Total</th>
                        <th>Payment&nbsp;Mode</th>
                        <th>User&nbsp;Detail</th>
                        <th class="text-primary" colspan="2">Controls</th>
                    </tr>
                    </thead>
                    <tbody id="pendingOrder">
                    <?php
                    $k = 0;
                    $sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE bill.status ='pending' ORDER BY id DESC";
                    //                    $sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE bill.status ='pending'";
                    $result = mysqli_query($conn, $sql1);
                    while ($order = mysqli_fetch_array($result)) {
                        $k++;
                        ?>
                        <tr>
                            <td class="text-center text-dark"><?php echo $k; ?></td>
                            <td class="text-center text-dark"><?php echo $order["id"]; ?></td>
                            <td class="text-center text-dark"><?php echo $order["datetime"]; ?></td>
                            <td class="text-center text-dark"><?php echo $order["grandtotal"]; ?></td>
                            <td class="text-center text-dark text-capitalize"><?php echo $order["paymentmethod"]; ?></td>
                            <td class="text-dark">
                                <div><?php echo $order["email"]; ?></div>
                                <div><?php echo $order["fullname"]; ?></div>
                                <div><?php echo $order["mobile"]; ?></div>
                            </td>
                            <td class="text-center"><a class="btn btn-success"
                                                                 href="vieworderdetail.php?q=<?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=<?php echo $order['mobile']; ?>">View
                                    Detail</a></td>
                            <td class="text-center"><a class="btn btn-info"
                                                                    href="shiporder.php?q=<?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=<?php echo $order['mobile']; ?>">Ship
                                    Order</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                <h3>Shipped</h3>
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
                    $k = 0;
                    $sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE bill.status ='shipped'";
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
                            <td class="text-dark">
                                <div class=""><?php echo $order["email"]; ?></div>
                                <div class=""><?php echo $order["fullname"]; ?></div>
                                <div class=""><?php echo $order["mobile"]; ?></div>
                            </td>
                            <td>
                                <strong class="btn btn-success"
                                        onclick="showmodal('<?php echo $order['id']; ?>')">Deliever Order</strong>

                            </td>
                            <td class="text-center"><a class="text-info"
                                        href="vieworderdetail.php?q=<?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=<?php echo $order['mobile']; ?>">View
                                    Detail</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                <h3>Delivered</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Order No.</th>
                        <th class="text-center">Date Time</th>
                        <th class="text-center">Grand Total</th>
                        <th class="text-center">Payment Mode</th>
                        <th class="text-center">User Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k = 0;
                    $sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE bill.status ='delievered'";
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
                            <td class="text-dark">
                                <div class=""><?php echo $order["email"]; ?></div>
                                <div class=""><?php echo $order["fullname"]; ?></div>
                                <div class=""><?php echo $order["mobile"]; ?></div>
                            </td>
                            <td class="text-center"><a class="text-info"
                                                                 href="vieworderdetail.php?q=
                                <?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=
                                <?php echo $order['mobile']; ?>">View
                                    Detail</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                <h3>Cancelled</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Order No.</th>
                        <th class="text-center">Date Time</th>
                        <th class="text-center">Grand Total</th>
                        <th class="text-center">Payment Mode</th>
                        <th class="text-center">User Detail</th>
                        <TH>Controls</TH>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $fullname = "";
                    $mobile = "";
                    $k = 0;
                    $sql1 = "SELECT * FROM `bill` inner JOIN signup on bill.email = signup.email WHERE bill.status ='cancelled'";
                    $result = mysqli_query($conn, $sql1);
                    while ($order = mysqli_fetch_array($result)) {
                        $k++;
                        ?>
                        <tr>
                            <td class="text-center text-dark"><?php echo $k; ?></td>
                            <td class="text-center text-dark"><?php echo $order["id"]; ?></td>
                            <td class="text-center text-dark"><?php echo $order["datetime"]; ?></td>
                            <td class="text-center text-dark"><?php echo $order["grandtotal"]; ?></td>
                            <td class="text-center text-dark text-capitalize"><?php echo $order["paymentmethod"]; ?></td>
                            <td class="text-dark">
                                <div class=""><?php echo $order["email"]; ?></div>
                                <div class=""><?php echo $order["fullname"]; ?></div>
                                <div class=""><?php echo $order["mobile"]; ?></div>
                            </td>
                            <td class="text-center text-info"><a class="text-info"
                                                                 href="vieworderdetail.php?q=
                                <?php echo $order['id']; ?>&r=<?php echo $order['fullname']; ?>&s=
                                <?php echo $order['mobile']; ?>">View Detail</a></td>
                        </tr>
                        <?php
                        $mobile = $order["mobile"];
                        $fullname = $order["fullname"];
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal" id="modaldetail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="row justify-content-center mt-4">
                        <h1>Order Received By: </h1>
                    </div>
                </div>
                <div class="modal-body justify-content-center">
                    <form action="orderreceivedaction.php" method="post">
                        <div class="row offset-3 col-sm-6 mt-4">
                            <input type="text" name="person" id="person" class="form-control">
                        </div>
                        <div class="row offset-3 col-sm-6 mt-4">
                            <input type="hidden" name="billid" value="" id="billid">
                            <input type="hidden" value="<?php echo $fullname; ?>" class="form-control" name="fullname"
                                   id="fullname">
                            <input type="hidden" value="<?php echo $mobile; ?>" class="form-control" name="mobile"
                                   id="mobile">

                            <input type="submit" name="" id="" value="Add"
                                   class="w-50 h-100 btn btn-success text-primary">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
        <script>
            function showmodal(bid) {
                document.getElementById("billid").value = bid;
                $("#modaldetail").modal("show");

            }
        </script>

    </div>
</div>

<?php
include_once 'footer.php';
?>

</body>
</html>