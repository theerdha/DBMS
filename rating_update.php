<?php
	$resp_id = $_GET["resp_id"];
	$id = $_GET["id"];
	$rating = $_POST['Rating'];
	$user_type = $_GET['user_type'];
	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	$query = "UPDATE Respondent SET Rating = $rating where Adhaar_number = '$resp_id'"; 
	//$query1 = "INSERT INTO Resolves VALUES('$id', '$CID')";	
	
	$result = mysqli_query($con, $query);
	//$result = mysqli_query($con, $query1);
	if($user_type == 2){
		header ("Location: Admin.php?id=$id");
	}
	else{
		header ("Location: grievant_homepage.php?id=$id");	
	}
?>

