<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <title>bob's auto parts - order results</title>
</head>

<body>
    <div class="container">
        <h1 class="title">bob's auto part</h1>
        <h2>order result</h2>
        <div class="result">
            <?php
            echo "<p class='invoice_date_title'>order process at: </p>";
            echo "<span class='date'>";
            echo date('H:i, j F Y') . '</span><br /><br />'
            ?>
            <?php

            $tires = 0;
            $oil = 0;
            $spark = 0;
            $totalQty = 0;

            if (isset($_POST["txtTires"]) && !empty($_POST['txtTires'])) {
                $tires = $_POST["txtTires"];
            }

            if (isset($_POST["txtOil"]) && !empty($_POST["txtOil"])) {
                $oil = $_POST["txtOil"];
            }

            if (isset($_POST["txtSpark"]) && !empty($_POST["txtSpark"])) {
                $spark = $_POST["txtSpark"];
            }

            $totalQty = $tires + $oil + $spark;

            echo "<p class='small_heading'>item ordered : </p>";
            echo "<span class='number'>" . $totalQty . "</span><br />";

            if ($totalQty == 0) {
                echo "<p class='error'>";
                echo 'You did not order anything on the previous page!';
                echo '</p>';
                exit;
            } else {
                echo '<p>your order is as follows: </p>';
                echo '<p>';

                if ($tires > 0)
                    echo htmlspecialchars($tires) . ' tires<br />';

                if ($oil > 0)
                    echo htmlspecialchars($oil) . ' bottles of oil<br />';

                if ($spark > 0)
                    echo htmlspecialchars($spark) . ' spark plugs<br />';

                echo '</p>';
            }

            $totalAmount = 0.00;
            const TIRE_PRICE = 100;
            const OIL_PRICE = 10;
            const SPARK_PRICE = 4;

            $totalAmount = $tires * TIRE_PRICE + $oil * OIL_PRICE + $spark * SPARK_PRICE;

            echo 'Subtotal: ';
            echo "<span class='number'> $ " . number_format($totalAmount, 2) . "</span><br />";

            $txtRate = 0.10;
            $totalAmount = $totalAmount * (1 + $txtRate);

            echo "<span class='small-heading'>total including tax </span>";
            echo "<span class='number'> $ " . number_format($totalAmount, 2) . "</span>";

            ?>
        </div>
    </div>
</body>

</html>