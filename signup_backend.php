<?php

$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$name = $_POST["name"];
$email = $_POST["email"];
$aadhaar = $_POST["aadhaar"];
$password = md5($_POST["password"]);
$user_type = $_GET['user_type'];
$type_of_respondent = 'COUNSELLOR';

if($user_type == 0){
	$type_of_respondent = $_POST["Type"];
}

$query = "SELECT * from End_User eu where eu.Email='$email' OR eu.Adhaar_number='$aadhaar'"; 
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);

if($numResults == 1 || $aadhaar=='' || $email == '')
{
	header ("Location: signup.php?state=1&user_type=$user_type");
}
else
{
	if($user_type == 0){
		$query = "INSERT INTO End_User(Adhaar_number, Name, Email, Password) VALUES ('$aadhaar', '$name', '$email', '$password')";
		mysqli_query($con, $query);
		$query = "INSERT INTO Respondent(Adhaar_number, Type) VALUES ('$aadhaar','$type_of_respondent')";
		mysqli_query($con, $query);
	}
	else if($user_type == 1){
		$query = "INSERT INTO End_User(Adhaar_number, Name, Email, Password) VALUES ('$aadhaar', '$name', '$email', '$password')";
		mysqli_query($con, $query);
		$query = "INSERT INTO Grievant(Adhaar_number) VALUES('$aadhaar')";
		mysqli_query($con, $query);
	}	
	header ("Location: signin_with_signup.php?state=2&user_type=$user_type");
}

?>
