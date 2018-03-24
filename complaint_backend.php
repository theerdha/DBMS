<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
	$type = $_POST['Complaint'];
	$complaint = "";
	if($type == "Garbage"){
		$complaint = 'RAG_PICKER';
	}
	else if($type == "Public Nuisance"){
		$complaint= 'COUNSELLOR';	
	}
	else if($type == "Mess related"){
		$complaint = 'MESS_WORKER';
	}

	$location = $_POST["Location"];
	$report = $_POST["Report"];
	$lat = $_POST["lat"];
	$long = $_POST["long"];
	$timestamp = date("Y-m-d H:i:s");	

	$query = "INSERT INTO Complaint(Type,abscissa, ordinate, Location_tag, Report,Photo_pointer1,Time_stamp1) VALUES('$complaint',$lat,$long,'$location','$report','$image','$timestamp')";
	$result = mysqli_query($con,$query);
	header("Location: grievant_homepage.php?id=$id");
	/*
	$query = "SELECT * FROM Complaint WHERE Complaint_ID=1";
	$result = mysqli_query($con,$query);
	$row = $result->fetch_assoc();
	header("Content-type: image/jpg"); 
	
    echo $row['Photo_pointer1'];
    */
?>