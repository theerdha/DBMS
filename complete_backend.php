<?php
	
//$image = file_get_contents($_FILES['fileToUpload']['tmp_name']);
	
	$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$cid = $_GET['cid'];
	$id = $_GET['id'];
	$timestamp = date("Y-m-d H:i:s");
	$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));


	//$query1 = "select * from Complaint where Complaint_ID = $CID" ;
	//$result1 = mysqli_query($con, $query1);
    //$row1 = $result1->fetch_assoc();

	//$del_query = "DELETE FROM Complaint where "
	
		
	//$query = "INSERT INTO Complaint values($cid,$row1['Type'],$row1['abscissa'],$row1['ordinate'],$row1['Location_tag'],'RESOLVED',$row1['Report'],$row1['Photo_pointer1'],'$image',$row1['Time_stamp1'],'$Time_stamp2') ";

    $query = "UPDATE Complaint SET Status = 'RESOLVED', Photo_pointer2 = 	'$image', Time_stamp2 = '$timestamp' WHERE Complaint_ID = $cid"; 
	
	$result = mysqli_query($con, $query);

	$query1 = "INSERT INTO Resolves VALUES('$id', '$cid')";	
	$result = mysqli_query($con, $query1);

	header ("Location: respondent_homepage.php?id=$id");

?>

