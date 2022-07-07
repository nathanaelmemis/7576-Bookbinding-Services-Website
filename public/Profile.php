<?php 
    session_start();

	include("../PHP/Connection.php");
    include("../PHP/Functions.php");

	$user_data = check_login($con);

    if ($user_data == NULL) header("Location: login.php");

    // get user data
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>7576 Book Binding Services</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Profile.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="header-container" id="header-container">
                <div class="header-left-container">
                    <div class="header-left" id="header-left-hide">
                        <a class="header-left-content" href="Homepage.php#main-products-container" style="position: sticky;">Products</a>
                    </div>
                    <div class="header-left" id="header-left">
                        <a class="header-left-content" id="header-left-content" href="Inquire.php">Inquire</a>
                    </div>
                    <div class="header-left" id="header-left-hide">
                        <a class="header-left-content" href="Homepage.php#about-us-container">About Us</a>
                    </div>
                </div>
                <div class="header-logo-container" id="header-logo-container">
                    <a href="Homepage.php"><img class="header-logo" src="../assets/HomePage/Header/CompanyLogo.png" alt="Company Logo"></a>
                </div>
                <div class="header-right-container" id="header-right-container">
                    <div class="header-right" id="header-right">
                        <a class="header-right-content" id ="header-right-content" href="Logout.php">Logout</a>
                    </div>
                </div>
            </div>
             <!-- FLOATING LINKS -->
            <section class="floating-links" id="floating-links">
                <a><div class="floating-links-facebook"></div></a>
                <a><div class="floating-links-instagram"></div></a>
                <a><div class="floating-links-youtube"></div></a>
                <a><div class="floating-links-twitter"></div></a>
            </section>
        </header>
        <!-- MAIN -->
        <main id="main">
            <!-- ORDERS -->
            <section class="main-introduction-container">
                <div class="main-introduction-name-container">
                    <p class="main-introduction-name" id="main-introduction-name">Your Orders</p>
                </div>
                <div class="main-introduction-line-container" id="main-introduction-line-container">
                    <hr class="main-introduction-line">
                </div>
            </section>
        </main>
    </body>
</html>