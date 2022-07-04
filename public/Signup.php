<!DOCTYPE html>
<html>
    <head>
        <title>7576 Book Binding Services</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="header-container">
                <div class="header-left-container">
                    <div class="header-left" id="header-left-hide">
                        <a class="header-left-content" href="Homepage.php#main-products-container" style="position: sticky;">Products</a>
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
            <section class="main-login-container" id="main-login-container">
                <div class="main-login-name-container">
                    <p class="main-login-name">Sign Up</p>
                </div>
                <div class="main-login-line-container">
                    <hr class="main-login-line">
                </div>
                <form method="post">
                    <div class="main-login-error-container" id="main-login-error-container">
                        <p class="main-login-error" id="main-login-error">User Already Exists!</P>
                    </div>
                    <div class="main-login-form-container">
                        <div class="main-login-form-content-container">
                            <label class="main-login-form-content">Email:</label>
                            <input class="main-login-form-input" type="text" name="email"></input>
                        </div>
                        <div class="main-login-form-content-container">
                            <label class="main-login-form-content">Password:</label>
                            <input class="main-login-form-input" type="password" name="password"></input>
                        </div>
                        <div class="main-login-form-content-container">
                            <label class="main-login-form-content">Full Name:</label>
                            <input class="main-login-form-input" type="password" name="name"></input>
                        </div>
                        <div class="main-login-form-content-container">
                            <label class="main-login-form-content">Address:</label>
                            <input class="main-login-form-input" type="password" name="address"></input>
                        </div>
                    </div>
                    <div class="main-login-button-container">
                        <div class="main-login-button-enter-container">
                            <input class="main-login-button-enter" type="submit" value="Enter"></input>
                        </div>
                        <div class="main-login-button-signup-container">
                            <a class="main-login-button-signup" href="Login.php" >Login</a>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>

<?php
    session_start();

    include("../PHP/Connection.php");
    include("../PHP/Functions.php");

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $address = $_POST['address'];

        if(!empty($email) && !is_numeric($email) && !empty($password) && !empty($name) && !is_numeric($name) && !empty($address) && !is_numeric($address))
		{
            //check if input exists in db
            $query = "select * from customer_information where Email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result && mysqli_num_rows($result) > 0)
            {
                echo '<script>document.getElementById("main-login-error-container").style.display = "block";</script>';
                die;
            }

			//save to database
			$customer_id = customer_id($con);
			$query = "insert into customer_information (CustomerID,Email,Password,CustomerName,Address) values ('$customer_id','$email','$password','$name','$address')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
        else
        {
            echo '<script>document.getElementById("main-login-error-container").style.display = "block";
            document.getElementById("main-login-error").innerHTML = "Invalid Input!";</script>';
        }
    }
?>