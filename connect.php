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

	$Firstname = $_POST['firstname'];
	$Surname = $_POST['surname'];
	$Child_firstname = $_POST['child_firstname'];
	$Child_surname = $_POST['child_surname'];
	$Child_passport_no = $_POST['child_passport_no'];
	$Child_sex = $_POST['child_sex'];
	$Child_nationality = $_POST['child_nationality'];
	$Child_date_of_birth = $_POST['child_date_of_birth'];
	$Cont_firstname = $_POST['cont_firstname'];
	$Cont_surname = $_POST['cont_surname'];
	$Cont_email = $_POST['cont_email'];
	$Cont_phone = $_POST['cont_phone'];
	$Email = $_POST['email'];
	$Pass_expiry = $_POST['pass_expiry'];
	$Passport_no = $_POST['passport_no'];
	$Sex = $_POST['sex'];
	$Nationality = $_POST['nationality'];
	$Date_of_birth = $_POST['date_of_birth'];
	$Departure_date = $_POST['departure_date'];
	$Departure_time = $_POST['departure_time'];
	$Am_pm_1 = $_POST['am_pm_1'];	
	$Return_date = $_POST['return_date'];
	$Return_time = $_POST['return_time'];
	$Am_pm_2 = $_POST['am_pm_2'];
	$Departing_from_country = $_POST['departing_from_country'];
	$Departing_from_city = $_POST['departing_from_city'];
	$Destination_country = $_POST['destination_country'];
	$Destination_city = $_POST['destination_city'];
	$Air_line = $_POST['air_line'];
	$Fare = $_POST['fare'];
	$Payment_option = $_POST['payment_option'];
	$Class = $_POST['class'];
	
	$Flight_option = $_POST['flight_option'];
	

	$sql = "INSERT INTO passenger_details
	 (Firstname,Surname,
	Child_firstname,Child_surname,Child_passport_no,
	Child_sex,Child_nationality,Child_date_of_birth,
	Cont_firstname,Cont_surname,Cont_email,Cont_phone,
	Email,Pass_expiry,Passport_no,Sex,Nationality,Date_of_birth,
	Departure_date,Departure_time,
	Am_pm_1,Return_date,Return_time,Am_pm_2,
	Departing_from_country,Departing_from_city,
	Destination_country,Destination_city,
	Air_line,Fare,Payment_option,Class,Flight_option)
	 VALUES 
	 ('$Firstname','$Surname','$Child_firstname',
	 '$Child_surname','$Child_passport_no',
	 '$Child_sex','$Child_nationality','$Child_date_of_birth',
	 '$Cont_firstname','$Cont_surname','$Cont_email',
	 '$Cont_phone','$Email','$Pass_expiry','$Passport_no',
	 '$Sex','$Nationality','$Date_of_birth',
	 '$Departure_date','$Departure_time','$Am_pm_1',
	 '$Return_date','$Return_time','$Am_pm_2',
	 '$Departing_from_country','$Departing_from_city',
	 '$Destination_country','$Destination_city','$Air_line',
	 '$Fare','$Payment_option','$Class','$Flight_option')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:1; url=thanks.php");




?>