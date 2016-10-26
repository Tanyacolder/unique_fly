<?php
	$con = mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo 'Not Connected To Server';
	}

	if(!mysqli_select_db($con,'unique_fly'))
	{
		echo 'Data Not Selected';
	}

	$Client_name = $_POST['client_name'];
	$Client_email = $_POST['client_email'];
	$Client_msg = $_POST['client_msg'];
	$Client_contact = $_POST['client_contact'];
	
	

	$sql = "INSERT INTO client_views
	 (Client_name,Client_email,
	Client_msg,Client_contact)
	 VALUES 
	 ('$Client_name','$Client_email','$Client_msg',
	 '$Client_contact')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:5; url=thanks.php");




?>