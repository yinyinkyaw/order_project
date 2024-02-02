<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo "Method not allowed.";
    }
    if (isset($_REQUEST['txtSearch']) && !empty($_REQUEST['txtSearch'])) {
        $searchData = $_REQUEST['txtSearch'];

        require_once '../Classes/Database.php';
        require_once '../Classes/Book.php';

        $book = new Book($searchData);

        $result = $book->search();
    }
    ?>
    <?php if (count($result) > 0)  ?>
    <div class="container">
        <form class="figure">
            <h2>Cover Image</h2>
            <h2>ISBN</h2>
            <h2>Author</h2>
            <h2>Title</h2>
            <h2>Price</h2>
            <?php foreach ($result as $row) {
                echo '<span></span>';
                echo "<span>$row[ISBN]</span>";
                echo "<span>$row[author]</span>";
                echo "<span>$row[title]</span>";
                echo "<span>$row[price]</span>";
            }
            ?>

        </form>
    </div>
</body>

</html>