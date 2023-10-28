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
            
            <div class="intro">
                <div class="intro-image">
                    <img src="../../img/admin.jpeg" alt="admin">

                </div><!--inroduction image-->
                
                <div class="content">
                    <div class="contentAd">
                        <h2>Reservations</h2>
                        <img src="../../img/manage1.jpeg" alt="Burgers">
                        <a href="../../frontend/admin/manageReservation.php" class="button">Manage</a>
                    </div><!--Content1-->
                    <div class="contentAd">
                        <h2>Food Items</h2>
                        <img src="../../img/manage.jpeg" alt="Burgers">
                        <a href="../../frontend/admin/manageFood.php" class="button">Manage</a>
                    </div><!--Content2-->
                    <div class="contentAd">
                        <h2>Reviews</h2>
                        <img src="../../img/review.jpeg" alt="Burgers">
                        <a href="../../frontend/admin/manageReview.php" class="button">Manage</a>
                    </div><!--Content3-->


                </div><!--Content-->

            </div><!--introduction-->
            
            <!--<div class="Copyrights">
                <div class="left">
                    Copyrights &copy; 2023 SC IP Holder LLC. All Rights Reserved
                </div>
                <div class="right">
                    Website by :YasWebs.com
                </div>
            </div><--Copyrights-->
        </div><!--wrapper-->
    </body>
</html> 