<?php

$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user_type = $_GET["user_type"];
$permission = 0;
$email = $_POST["email"];
$password = md5($_POST["password"]);
if($user_type == 0){
	$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'";
}
else if($user_type == 1){
	$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'";	
}
else if($user_type == 2){
	$query = "SELECT * from End_User eu where eu.Email = '$email' and eu.Password = '$password'";	
}

$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
$object = mysqli_fetch_field_direct($result,0);
$username = $object->name;
$numResults = 1;
// Query to get name column
if($numResults == 1)
{	
	$permission = 1;	
}

if($user_type == 0){
	if($permission == 1 ){
		header ("Location: respondant_homepage.php?name=$username"); 	
	}
	else{
		header ("Location: signin.php?state=1&user_type=$user_type");
	}
}
elseif($user_type == 1){
	if($permission == 1){
		header ("Location: grievant_homepage.php?name=$username"); 
	}
	else{
		header ("Location: signin_with_signup.php?state=1&user_type=$user_type");
	}
}else{
	if($permission == 1){
		header ("Location: Admin.php?name=$username"); 
	}
	else{
		header ("Location: signin_with_signup.php?state=1&user_type=$user_type");
	}
}

?>
