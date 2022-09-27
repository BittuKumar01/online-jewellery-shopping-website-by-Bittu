<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'headerfiles.html';
    ?>
    <script src="myjs/datepicker.js"></script>
</head>
<body>
<?php
include_once 'adminheader.php';
?>

<div class="container">

    <div class="row mt-4 justify-content-center">
        <div class="col-sm-4 text-center">
            <input type="text" placeholder="From:" readonly id="fromdate" class="dtp" name="fromdate">
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="todate" placeholder="To:" readonly class="dtp" name="todate">
        </div>

        <div class="col-sm-4 text-center">
            <div class="row">
                <select name="status" id="status" onchange="datewise()">
                    <option value="">--Choose Status--</option>
                    <option value="pending">Pending</option>
                    <option value="shipped">Shipped</option>
                    <option value="delievered">Delievered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>
<!--        <input type="button" value="Go ...." onclick="datewise()" class="btn btn-primary">-->

    </div>

    <div id="datewiseorder">

    </div>
</div>
<?php
include_once 'footer.php';
?>
<script>
    $(document).ready(function () {
        // $("#signup").validate();
        $(".dtp").datepicker({
            changeYear: true,
            changeMonth: true,
            dateFormat: "yy-mm-dd"
        });
    })
</script>
</body>
</html>



