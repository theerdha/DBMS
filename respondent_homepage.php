<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("127.0.0.1","root","Bsaditya@1998","dbms_demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "SELECT * from End_User eu where eu.Adhaar_number = '$id'";
	$result = mysqli_query($con, $query);
	$row = $result->fetch_assoc();
	$name = $row["Name"];
?>
<html>
	<head>
		<title>respondent homepage</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(bg.jpg) no-repeat center center fixed;
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
				padding: 20px;
				border: 5px solid gray;
				margin: 0;
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
			.right {
				position: relative;
				right: 0px;
				left : 300px;
				width: 500px;
				padding: 0px;
			}

		</style>
	</head>

	<body class ="right" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/>
	<center>
		<h3 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Welcome <?php echo $name; ?>!</h3>
		<p id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Your current rating is  <?php echo $name; ?><p>
		<div>Complaints with status 0 <button class="button">Take up</button> </div><br/>
		<a href = "respondent_homepage.php" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #15632b">View my solved Complaints</span>  &nbsp; &nbsp; &nbsp;
		<a href = "editprofile.php?id=<?php echo $id ?>&user_type=0" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #15632b">edit profile</span>  &nbsp; &nbsp; &nbsp;
		<a href = "signin_with_signup.php?user_type=0&state=0" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color:#15632b">logout</span>
		
	</center>
</html>
