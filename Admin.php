<?php 
	$name = $_GET['name'];
	$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "SELECT * from End_User eu where eu.Adhaar_number = '$id'";
	$result = mysqli_query($con, $query);
	$row = $result->fetch_assoc();
	$name = $row["Name"];

	$query1 = "";
	$result1 = mysqli_query($con, $query1);
?>

<html>
	<head>
		<title>Administrator</title>
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
				padding: 20px;
				border: 5px solid gray;
				margin: 0;
			}
			.button {
				background-color: #FFFFFF; /* Green */
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td {
				border: 1px solid #000000;
				text-align: center;
				padding: 8px;
				background-color: #f8f9d1;
				
			}
			th {
				border: 1px solid #000000;
				text-align: center;
				padding: 8px;
				background-color: #dddddd;
			}

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color:#15632b;"> Swachh KGP<br/>
	<center>
		<h3 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Welcome Admin</h3>
		<table>
		  <tr>
			<th>Worker ID</th>
			<th>Category</th>
			<th>Tasks in week</th>
			<th>Rating</th>
			<th>Action</th>
		  </tr>
		  
			<?php
               while ($row1 = $result1->fetch_assoc()) {?>
                   <tr>
				   <td><?php echo $row1['Complaint_ID'];?></td>
				   <td><?php echo $row1['Complaint_ID'];?></td>
                   <td><?php echo $row1['Complaint_ID'];?></td>
                   <td><?php echo $row1['Report'];?></td>
                   <td><select name = "Rating">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
				  </select></td>
                   
                   </tr>
              <?php  } ?>
		</table><br/> <br/>
		<button class = "button">Analyse Rag Pickers</button>  
		<button class = "button">Analyse Mess workers</button> 
		<button class = "button">Analyse Counsellors</button> 
		<button class = "button" onclick="document.location.href='signin_with_signup.php?user_type=2&state=0'" >Logout</button> 
		
	</center>
</html>
