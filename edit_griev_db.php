<?php

$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user_type = $_GET["user_type"];
$id = $_GET['id'];
$name = $_POST["name"];
$dob = $_POST["DOB"];
$age = (int)$_POST["age"];
$houseno = $_POST["Housenumber"];
$location = $_POST["Location"];
$password = $_POST["password"];

$query = "UPDATE End_User SET Name = '$name', Date_of_birth='$dob', Age=$age, Location='$location', House_number = '$houseno' WHERE Adhaar_number = '$id'";
$result = mysqli_query($con,$query); 
header("Location: editprofile.php?id=$id&user_type=$user_type");
?>
