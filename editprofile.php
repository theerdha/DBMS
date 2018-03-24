<?php 
	$id = $_GET['id'];
	$user_type = $_GET['user_type'];
	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "SELECT Name,Date_of_birth,Age,House_number,Location from End_User where Adhaar_number = '$id'";
	$result = mysqli_query($con, $query);
	$row = $result->fetch_assoc();
	$name = $row['Name'];
	$dob = $row['Date_of_birth'];
	$age = $row['Age'];
	$House_number = $row['House_number'];
	$Location = $row['Location'];

?>
<html>
	<head>
		<title>edit profile</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(back.jpg) no-repeat center center fixed;
  					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover;
  					background-size: cover;
				}
			html, body {
    			height: 100%;
			}
			html {
    			display: table;
    			margin: auto;
			}
			body {
				text-align: center;
    			display: table-cell;
    			vertical-align: middle;
			}

			a:link, a:visited {
				color: white;
				text-decoration: none;
				
			}
			div {
				width: 600px;
				padding: 5px;
				
				margin: 0;
			}
			
			input[type=text], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #001;
				border-radius: 4px;
				box-sizing: border-box;
			}

			input[type=submit] {
				width: 100%;
				background-color: white;
				color: black;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
				
			.button {
				background-color: #14d18c; /* Green */
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP
	<center>
		<h5 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 40px; word-spacing: 0px; text-align:center; color: #15632b;">Edit your profile!<?php echo $name; ?>!</h5>
		<div> 
		<form action = "edit_griev_db.php?id=<?php echo $id ?>&user_type=<?php echo $user_type ?>" method = "POST">
			<input type="text" name = "name" placeholder = "Name" value= <?php echo $name?>><br>
			<input type="text" name = "DOB" placeholder = "YYYY-MM-DD" value = <?php echo $dob?>><br>
			<input type="text" name = "age" placeholder = "Age" value = <?php echo $age?>><br>
			<input type="text" name = "Housenumber" placeholder = "Housenumber" value=<?php echo $House_number?>><br>
			<input type="text" name = "Location" placeholder = "Location" value=<?php echo $Location?>><br>
			<input type="text" name = "password" type = "password" placeholder = "Password"><br>
			<button class="button" type = "submit" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #15632b">Submit</button>
			<button class = "button" type = "button" onclick="document.location.href='grievant_homepage.php?id=<?php echo $id?>'" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #15632b">Back</a></button><br/>
		</form>	

		</div>
		
		
	</center>
</html>
