<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Signature cuisine</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <link rel="stylesheet" type="text/css" href="../../css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="../../css/adminHome.css">

    </head>
    <body>
        <div class="wrapper">
            <div class="top-bar clearfix">
                <div class="top-bar-text">
                
                
                <h3>
                    Welocome to Administrative Area...
                </h3>
                </div><!--top-bar-text-->
                
                <div class="search-bar">
                    <form method="get" action="../../frontend/user/index.php">
                        <a href="../../frontend/user/searchpage.php">
                            <input type="search" id="search-box" name="Search-box">
                            <button type = "Submit"></button>
                        </a>
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
                    <li><a href="../../frontend/admin/adminHome.php">Home</a></li>
                    <li><a href="../../frontend/admin/manageReservation.php">Manage Reservation</a></li>
                    <li><a href="../../frontend/admin/manageFood.php">Manage Food Items</a></li>
                    <li><a href="../../frontend/admin/manageReview.php">Customer Reviews</a></li>
                    
                    
                </ul>
            </nav>
        </div><!--wrapper-->
        <?php
            include_once '../../backend/user/dbs.php';  // Include your database connection file
            $sql = "SELECT * FROM register;";
            $result = mysqli_query($connect, $sql);
            
            echo '<table>';
            echo '<tr><th>Registation ID</th><th>Date</th><th>Time</th><th>Table Number</th><th>Username</th><th>Remove</th></tr>';

            while ($row = $result->fetch_assoc()) {
                // Access the data by column name
                $regId = $row["regId"];
                $date = $row["date"];
                $time = $row["time"];
                $table_num = $row["table_num"];
                $userName = $row["userName"];

                echo '<tr>';
                echo "<td>$regId</td>";
                echo "<td>$date</td>";
                echo "<td>$time</td>";
                echo "<td>$table_num</td>";
                echo "<td>$userName</td>";
                echo "<td>";
                echo "<form method='POST' action='../../backend/admin/manageReservationP.php'>";
                echo "<input type='hidden' name='regId' value='$regId'>";
                echo "<button type='submit' name='remove'>Remove</button>";
                echo "</form>";
                echo "</td>";
                echo '</tr>';
            }

            echo '</table>';
                

        $connect->close();

        ?>
    </body>
</html>