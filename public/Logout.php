<?php

session_start();

if(isset($_SESSION['customerid']))
{
	unset($_SESSION['customerid']);

}

header("Location: HomePage.php");
die;