<?php

$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user_type = $_GET["user_type"];
$email = $_POST["email"];

if($user_type == 0 || $user_type == 1)$password = md5($_POST["password"]);
else $password = $_POST["password"];

$query = NULL;
if($user_type == 0){
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
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
if($numResults == 0)
{	
	if($user_type == 0){
		header ("Location: signin_with_signup.php?state=1&user_type=$user_type");
	}
	elseif($user_type == 1){
		header ("Location: signin_with_signup.php?state=1&user_type=$user_type");
	}
	else{
		header ("Location: signin.php?state=1&user_type=$user_type");
	}	
}
else{
	$row = $result->fetch_assoc();
	$aadhaar = $row["Adhaar_number"];
	$object = mysqli_fetch_field_direct($result,0);
	$username = $row["Name"];
	if($user_type == 0){
		header ("Location: respondent_homepage.php?id=$aadhaar"); 	
	}
	elseif($user_type == 1){
		header ("Location: grievant_homepage.php?id=$aadhaar"); 		
	}else{		
		header ("Location: Admin.php?id=$aadhaar&state=0"); 
	}
}
?>
