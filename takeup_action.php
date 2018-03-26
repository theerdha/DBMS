<?php
	$CID = $_GET["cid"];
	$id = $_GET["id"];

	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	$query = "UPDATE Complaint SET Status = 'PROCESSING' where Complaint_ID = '$CID'"; 
	//$query1 = "INSERT INTO Resolves VALUES('$id', '$CID')";	
	
	$result = mysqli_query($con, $query);
	//$result = mysqli_query($con, $query1);

	header ("Location: respondent_homepage.php?id=$id");

?>

