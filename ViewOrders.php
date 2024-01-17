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

        $fileName = "$document_root/order/report_a.txt";

        if (is_readable($fileName)) {
            $data = file_get_contents($fileName);

            $orders = explode("\n", $data);

            foreach ($orders as $order) {
                if (!empty($order)) {
                    echo "<div class='order_record'>" . htmlspecialchars($order) . '</div><br /><hr>';
                }
            }
        } else {
            echo "<div class='order_record'>Your order could not be processed at this time.
                      Please try again later!</div>";
        }
        ?>
    </div>
</body>

</html>