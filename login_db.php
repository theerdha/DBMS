<?php

$con = mysqli_connect("localhost","root","qwerty123","dbms-demo");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);

//$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	
}
else{

}

?>
