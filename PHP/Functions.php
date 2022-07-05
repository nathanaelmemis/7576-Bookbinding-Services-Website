<?php
	function check_login($con)
	{
		if(isset($_SESSION['Email']))
		{

			$id = $_SESSION['Email'];
			$query = "select * from customer_information join order_details on customer_information.CustomerID=order_details.CustomerID where Email = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		return NULL;
		die;
	}

	function customer_id($con)
	{
		$query = "select * from customer_information";

		$result = mysqli_query($con,$query);
		$exist = mysqli_num_rows($result) + 1;
		if ($exist < 10) $number = "0000";
		else if ($exist < 10) $number = "000";
		else if ($exist < 10) $number = "00";
		else if ($exist < 10) $number = "0";
		else 
		{
			$customer_id =  "C".$exist;
			return $customer_id;
		}

		$customer_id = "C".$number.$exist;
		return $customer_id;
	}
?>