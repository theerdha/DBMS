<?php

//$con = mysqli_connect("localhost","root","qwerty123","dbms-demo");
$user_type = $_GET["user_type"];
/*
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
*/
$permission = 0;
$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);

if($user_type == 0){
	//$query = "SELECT * FROM users WHERE email='$email'";
}
if($user_type == 1){
	// Query
}
// Query for username

//$result = mysqli_query($con, $query);
//$username = mysqli_query($result);
$username = "Buridi";
//$numResults = mysqli_num_rows($result);
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
		header ("Location: signin.php?failure=true&user_type=$user_type");
	}
}
elseif($user_type == 1){
	if($permission == 1){
		header ("Location: grievant_homepage.php?name=$username"); 
	}
	else{
		header ("Location: signin_with_signup.php?failure=true&user_type=$user_type");
	}
}

?>
