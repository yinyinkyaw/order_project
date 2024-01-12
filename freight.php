<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figure</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form class="figure">
            <div>
                <h2>Distance</h2>
                <strong>Km</strong>
            </div>
            <div>
                <h2>Cost</h2>
                <strong>$</strong>
            </div>
            <?php
            $distances = [50, 100, 150, 200];
            $initalDistance = 50;

            foreach ($distances as $distance) {
                $cost = $distance * 0.1;
                echo "<span>$distance</span>";
                echo "<span>$cost</span>";
            }
            ?>
        </form>
    </div>
</body>

</html>