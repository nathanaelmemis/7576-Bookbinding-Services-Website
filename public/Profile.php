<?php 
    session_start();

	include("../PHP/Connection.php");
    include("../PHP/Functions.php");

	$user_data = check_login($con);

    if ($user_data == NULL) header("Location: login.php");
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
            <div class="header-container">
                <div class="header-left-container">
                    <div class="header-left" id="header-left-hide">
                        <a class="header-left-content" href="Homepage.php#main-products-container" style="position: sticky;">Products</a>
                    </div>
                    <div class="header-left">
                        <a class="header-left-content" >Inquire</a>
                    </div>
                    <div class="header-left" id="header-left-hide">
                        <a class="header-left-content" href="Homepage.php#about-us-container">About Us</a>
                    </div>
                </div>
                <div class="header-logo-container" id="header-logo-container">
                    <a href="Homepage.php"><img class="header-logo" src="../assets/HomePage/Header/CompanyLogo.png" alt="Company Logo"></a>
                </div>
                <div class="header-right-container">
                </div>
                <div class="header-right-container" id="header-right-container">
                    <div class="header-right" id="header-right">
                        <a class="header-right-content" id ="header-right-content" href="HomePage.php"></a>
                    </div>
                </div>
                <?php
                    if ($user_data != NULL)
                    {
                        $first_name = strtok($user_data['CustomerName'], " ");
                        echo '<script>document.getElementById("header-right-content").innerHTML = "Welcome, '.$first_name.'";</script>';
                    }
                ?>
                <div class="header-right-container-compress" id="header-right-container-compress">
                    <div class="header-right" id="header-right">
                        <a class="header-right-content" id="header-right-content-compress" href="HomePage.php">Home</a>
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
            <!-- LOGIN -->
            <section>
                <p>This is your profile 
            </section>
        </main>
    </body>
</html>