
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>welcome Signature|MENU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/searchPage.css">

    <script src="cart.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="top-bar clearfix">
            <div class="top-bar-links">

                <ul>

                    <?php
                    if (isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
                        echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo '<li><a href="../../frontend/user/signup.php">Sign up</a></li>';
                        echo '<li><a href="../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                    }
                    ?>
                    <li><a href="../../frontend/user/foodMenu.php">Order Now</a></li>
                    <li><a href="../../backend/user/goToCart.php"><i class="fa fa-shopping-cart"></i>
                        </a></li>

                    <a href="../../frontend/user/index.php">
                        <li>
                            <i class="material-icons" id="cancel">&#xe5c9;</i>
                        </li>
                    </a>
                    <div class="search-bar">
                        <form method="get" action="../../frontend/user/searchPage.php">
                            <input type="search" id="search-box" name="Search-box">
                            <button type="button" onclick="searchItems()" id="searchBtn">Search</button>
                        </form>
                    </div> <!--search bar-->

                </ul>
            </div><!--top-bar-links-->

        </div><!--top-bar-->

        <div id="results">
            <ul id="matching-items"></ul>
        </div>
        <div class="choice">
            <div class="foods">
                <?php
                include_once '../../backend/user/dbs.php';  // Include your database connection file
                $sql = "SELECT * FROM foods";
                $result = mysqli_query($connect, $sql);



                while ($row = $result->fetch_assoc()) {
                    // Access the data by column name

                    $foodId = $row["foodId"];
                    $item = $row["item"];
                    $img = $row["img"];
                    $price = $row["price"];

                    echo '<div class="food-item">';
                    echo "<img src='$img' alt='Food 1'>";
                    echo "<h3> $item</h3>";
                    echo "<h4>Rs $price</h4>";
                    echo '<button>Add to Cart</button>';
                    echo '</div>';
                }


                $connect->close();

                ?>
            </div><!--foods-->
        </div>

    </div><!--wrapper-->
    <script src="../../frontend/user/search.js"></script>
    <script src="../../frontend/user/searchPage.js"></script>
</body>

</html>