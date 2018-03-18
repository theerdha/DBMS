<?php

$con = mysqli_connect("localhost","root","qwerty123","dbms-demo");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	echo "<br><br><br><center><h1>Already registered!</h1></center>";
}
else
{
	$query = "INSERT INTO users (email, password, name, login_count) VALUES ('$email', '$password', '$name', '0')";
	mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Successfully registered!</h1></center>";
}

?>
