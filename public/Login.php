<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>7576 Book Binding Services</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="header-container" id="header-container">
                <div class="header-left-container">
                    <div class="header-left" id="header-left">
                        <a class="header-left-content" id ="header-left-content" href="Signup.PHP" style="position: sticky;">Sign Up</a>
                    </div>
                </div>
                <div class="header-logo-container" id="header-logo-container">
                    <a href="Homepage.php"><img class="header-logo" src="../assets/HomePage/Header/CompanyLogo.png" alt="Company Logo"></a>
                </div>
                <div class="header-right-container" id="header-right-container">
                    <div class="header-right" id="header-right">
                        <a class="header-right-content" id ="header-right-content" href="HomePage.php">Home</a>
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
            <section class="main-login-container" id="main-login-container">
                <div class="main-login-name-container">
                    <p class="main-login-name">Login</p>
                </div>
                <div class="main-login-line-container">
                    <hr class="main-login-line">
                </div>
                <form method="post">
                    <div class="main-login-error-container" id="main-login-error-container">
                        <p class="main-login-error" id="main-login-error">Invalid Input!</P>
                    </div>
                    <div class="main-login-form-container">
                        <div class="main-login-form-content-container-Email" id="main-login-form-content-container-Email">
                            <label class="main-login-form-content" id="main-login-form-content">Email:</label>
                            <input class="main-login-form-input" id="main-login-form-input" type="text" name="email"></input>
                        </div>
                        <div class="main-login-form-content-container-Password">
                            <label class="main-login-form-content" id="main-login-form-content">Password:</label>
                            <input class="main-login-form-input" id="main-login-form-input" type="password" name="password"></input>
                        </div>
                    </div>
                    <div class="main-login-button-container">
                        <div class="main-login-button-enter-container" id="main-login-button-enter-container">
                            <input class="main-login-button-enter" id="main-login-button-enter" type="submit" value="Enter"></input>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>

<?php
    include("../PHP/Connection.php");

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !is_numeric($email) && !empty($password))
        {
            //read from database
            $query = "select * from customer_information where Email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['Password'] === $password)
                    {
                        $_SESSION['customerid'] = $user_data['CustomerID'];
                        header("Location: HomePage.php");
                        die;
                    }
                }
            }
            
            echo '<script>document.getElementById("main-login-error-container").style.display = "block";</script>';
        }
        else
        {
            echo '<script>document.getElementById("main-login-error-container").style.display = "block";</script>';
        }
    }
?>