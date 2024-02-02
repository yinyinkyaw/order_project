<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<body>
    <div class="container-search">
        <form action="functions/search.php" method="POST">
            <div class="search_container">
                <input type="text" name="txtSearch" id="txtSearch" placeholder="Search here ..." class="search_input" />
                <button class="btn_search" type="submit">
                    <box-icon name='search-alt'></box-icon>
                </button>
            </div>
        </form>
    </div>
</body>

</html>