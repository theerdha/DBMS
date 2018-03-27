<?php
	$id = $_GET["id"];
	$cid = $_GET["cid"];
	$rating = $_POST['Rating'];
	$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	$query = "UPDATE Complaint SET Rating = $rating where Complaint_ID = '$cid'"; 
	//$query1 = "INSERT INTO Resolves VALUES('$id', '$CID')";	
	
	$result = mysqli_query($con, $query);
	//$result = mysqli_query($con, $query1);
		header ("Location: grievant_homepage.php?id=$id");	
?>
