<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>bob's auto parts - order results</title>
</head>

<body>
    <div class="container">
        <h1 class="title">bob's auto part</h1>
        <h2>order result</h2>
        <div class="result">
            <?php
            echo "<p>order process at: </p>";
            echo "<span class='date'>";
            echo date('H:i, j F Y') . "</span><br /><br />"
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

            echo "<p class='small heading'>item ordered : </p>";
            echo "<span class='number'>" . $totalQty . "</span><br />"
            ?>
        </div>
    </div>
</body>

</html>