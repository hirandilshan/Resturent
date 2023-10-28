<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/signup.css">
        <link rel="stylesheet" type="text/css" href="../../css/headerFooter.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="top-bar clearfix">
                <div class="top-bar-links">
                
                <ul>
                    <li><a href="../../frontend/user/signup.php">Sign up</a></li>
                    <?php
                        if(isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
                            echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                        } else {
                            echo '<li><a href="../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                        }
                    ?>
                    <li><a href="../../frontend/user/menu.php">Order Now</a></li>
                    <li><a href="../../frontend/user/cart.php"><i class="fa fa-shopping-cart"></i>
                    </a></li>
                                        
                </ul>
                </div><!--top-bar-links-->

                <div class="search-bar">
                <form>    
                    <a href="../../frontend/user/searchpage.php">
                        <input type="search" id="search-box" name="Search-box">
                    </a>
                    <button type="submit"></button>
                </form>
                </div><!--search-bar-->
        
            </div><!--top-bar-->
            <header>
                <div class="logo">
                    <h1>Signature cuisine</h1>
                    <p>Resturent chain</p>
                    
                </div><!--logo-->

                <div class="socialM">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook fa-fw"></i>
                        </a></li>
                        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram fa-fw"></i>
                        </a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter fa-fw"></i>
                        </a></li>
                        
                        
                    </ul>

                </div><!--Social media-->
            </header>
            <nav>
                <ul>
                    <li><a href="../../frontend/user/index.php">Home</a></li>
                    <li><a href="../../frontend/user/menu.php">Our Menu</a></li>
                    <li><a href="../../frontend/user/facility.php">Facilities</a></li>
                    <li><a href="../../frontend/user/service.php">Service Types</a></li>
                    
                    <li><a href="../../frontend/user/offers.php">offers</a></li>
                    <li><a href="../../frontend/user/gallary.php">Gallary</a></li>
                    <li><a href="../../frontend/user/aboutUs.php">About Us</a></li>
                    <li><a href="../../frontend/user/reservation.php">Reservation</a></li>
                    
                </ul>
            </nav>
            

            <?php
            include_once '../../backend/user/dbs.php';  // Include your database connection file
            
        

            
            echo "<div class='forms'>";
            echo "<div class='form-details'>";
            echo "<h2>Add New Food</h2>";
            echo "<div class='form-content'>";
                    
            echo "<form method='POST' action='../../backend/admin/addFoodP.php'>";
            echo "<div class='inputs'>";
            echo "<input type='text' name='foodId' placeholder='foodId' required>";
            echo "<label>Food Id</label>";
            echo "</div>";
            echo "<div class='inputs'>";
            echo "<input type='text' name='foodType' placeholder='food type' required>";
            echo "<label>Food Type</label>";
            echo "</div>";
            echo "<div class='inputs'>";
            echo "<input type='text' name='item' placeholder='foodName' required>";
            echo "<label>Food Name</label>";
            echo "</div>";
            echo "<div class='inputs'>";
            echo "<input type='text' name='img' placeholder='imgLink' required >";
            echo "<label>Image Link</label>";
            echo "</div>";
            echo "<div class='inputs'>";
            echo "<input type='double' name='price' placeholder='price' required>";
            echo "<label>Price</label>";
            echo "</div>";
                            
            echo "<button type='submit' name='add'>Add</button>";
            echo "</form>";
            echo "</div>";
                
            echo "</div>";
            ?>
        </body>
</html>