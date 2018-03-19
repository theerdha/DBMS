<?php

$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$name = $_POST["name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);

$query = "SELECT * from End_User eu where eu.Email='$email'"; 
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	echo "<br><br><br><center><h1>Already registered!</h1></center>";
}
else
{
	$query = "INSERT INTO End_User(Adhaar_number, Name, Email, Password) VALUES ('$', $$$$2, $$$$3)";
	mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Successfully registered!</h1></center>";
}
*/

?>

<html>
	<body>
	<button>Back</button>
	</body>

</html>
