<?php

$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user_type = $_GET["user_type"];
$id = $_GET['id'];
$name = $_POST["name"];
$dob = $_POST["DOB"];
$age = $_POST["age"];
$houseno = $_POST["Housenumber"];
$location = $_POST["Location"];
$password = $_POST["password"];

/*
if($user_type == 0){

	if($name != '')
	if($dob != '')
	if($age != '')
	if($houseno != '')
	if($location != '')
	if($password != '')

	$query = "SELECT * from End_User eu where eu.email = '$email' and eu.Password = '$password' and exists(SELECT * from Respondent g where g.Adhaar_number = eu.Adhaar_number)";
	//$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'"; 
}
else if($user_type == 1){
	$query = "SELECT * from End_User eu where eu.email = '$email' and eu.Password = '$password' and exists(SELECT * from Grievant g where g.Adhaar_number = eu.Adhaar_number)";	
	//$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'";
}
else if($user_type == 2){
	$query = "SELECT * from End_User eu where eu.email = '$email' and eu.Password = '$password' and exists(SELECT * from Administrator g where g.Adhaar_number = eu.Adhaar_number)";	
	//$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'";
}
*/


?>
