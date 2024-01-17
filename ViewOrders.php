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
    <div class="container">
        <h1 class="title">bob's auto parts</h1>
        <h2>customer orders</h2>

        <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];

        $orders = file("$document_root/order/orders/order.txt");
        $orderCount = count($orders);

        if ($orderCount == 0) {
            echo "<p><strong>No orders pending. <br/> Please try again later. </strong></p>";
        }

        for ($i = 0; $i < $orderCount; $i++) {
            echo $orders[$i] . "<br />";
        }


        ?>
    </div>
</body>

</html>