<?php session_start();
	if (isset($_POST["btnSubmit"]))
	{
		//Step 01: Read the values user has given and assign to the variables
		$userName = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		
		//create the db conncetion
		$con = mysqli_connect("localhost","root","", "sa23124912");
		
		//Error handling
		if(!$con)
		{
			die("Sorry, we are facing technical issues!!!");
		}
		
		
		$sql = "SELECT * FROM `tableaccount` WHERE `email` = '".$userName."' AND `password` = '".$password."'";
		
		$result = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($result)>0) //returns number of records in the parameter passed
		{
			
			//Create the session
			$_SESSION["userName"] = $userName;
			$_SESSION["Password"] = $password;
			header('Location:Order.html');
		} 
		else
		{
			header('Location:login.php');
		}
	}

	
?>