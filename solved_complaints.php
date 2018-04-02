<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$query = "SELECT c.Complaint_ID, c.Report from Complaint c, Resolves res where c.Complaint_ID = res.Complaint_ID and res.Resp_Adhaar_number = '$id' and c.Status = 'RESOLVED'";

	//$query = "SELECT * from Complaint ";
									   
	$result = mysqli_query($con, $query);
	/*$row = $result->fetch_assoc();
	$complaint = $row['Complaint_ID'];
	$report = $row['Report'];*/

?>

<html>
	<head>
		<title>solved complaints</title>
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
				width: 1000px;
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

	<body style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/><br/>
	<center>
		
		<table>
		  <tr>
			<th>Complaint_ID</th>
			<th>Report</th>
			<th>Picture</th>
		  </tr>
		  
			<?php
               while ($row = $result->fetch_assoc()) {?>
                   <tr>
                   <td><?php echo $row['Complaint_ID'];?></td>
                   <td><?php echo $row['Report'];?></td>
                   <td><button onclick="document.location.href='view_picture.php?pc_id=2&cid=<?php echo $row['Complaint_ID'] ?>&id=<?php echo $id ?>&user_type=0'">View Photo</button></td>
                   
                   </tr>
              <?php  } ?>
		</table>
<br/>
		<button class = "button" type = "button" onclick="document.location.href='respondent_homepage.php?id=<?php echo $id?>'">Back</a></button><br/>
		
		
	</center>
</html>
