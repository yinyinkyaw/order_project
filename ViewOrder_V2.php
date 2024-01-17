<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

$orders = file("$document_root/order/orders/order.txt");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order View</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container order_container">
        <h1 class="title">bob's auto parts</h1>
        <h2>customer orders - V2</h2>
        <div class="order_table">
            <h2>Order Date</h2>
            <h2>Tires</h2>
            <h2>Oil</h2>
            <h2>Spark Plugs</h2>
            <h2>Total</h2>
            <h2>Address</h2>

            <?php

            $orderCount = count($orders);
            if ($orderCount == 0) {
                echo "<p><strong>No orders pending. <br/> Please try again later. </strong></p>";
            }

            for ($i = 0; $i < $orderCount; $i++) {
                $orderInfo = explode("\t", $orders[$i]);
                for ($col = 0; $col < count($orderInfo); $col++) {
                    $value = $col == 1 || $col == 2 || $col == 3 ? (int)$orderInfo[$col] : $orderInfo[$col];
                    echo "<div>$value</div>";
                    // echo $col == 1 || $col == 2 || $col == 3 ? "<div>" . (int)$orderInfo[$col] . "</div>" : "<div>$orderInfo[$col]</div>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>