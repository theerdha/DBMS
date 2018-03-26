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

	$query1 = "SELECT c.Status,c.Complaint_ID, c.Report,c.abscissa, c.ordinate from Complaint c where c.Type = (SELECT r.Type from Respondent r where r.Adhaar_number = '$id') and (c.Status = 'UNRESOLVED' or c.Status = 'PROCESSING')";								   
	$result1 = mysqli_query($con, $query1);

	$query2 = "SELECT Rating from Respondent as r where r.Adhaar_number = '$id'";
	$result2 = mysqli_query($con,$query2);
	$row2 = $result2->fetch_assoc();
?>
<html>
	<head>
		<title>respondent homepage</title>
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
				background-color: #14d18c; /* Green */
				border: none;
				color: black;
				padding: 10px 30px;
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

	<body style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/>
	<center>
		<p id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 25px; word-spacing: 0px; text-align:center; color: #15632b;">Welcome <?php echo $name; ?>!</p>
		<p id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 25px; word-spacing: 0px; text-align:center; color: #15632b;">Your current rating is <?php echo $row2['Rating'] ?></p>
		
		<table>
		  <tr>
			<th>Complaint_ID</th>
			<th>Report</th>
			<th>Picture</th>
			<th>Location</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		  
			<?php
               while ($row1 = $result1->fetch_assoc()) {
               	$cid = $row1['Complaint_ID'];
               	?>
                   <tr>
                   <td><?php echo $cid;?></td>
                   <td><?php echo $row1['Report'];?></td>
                   <td><button onclick="document.location.href='view_picture.php?pc_id=1&cid=<?php echo $cid ?>&id=<?php echo $id ?>&user_type=0'">View Photo</button></td>
				   <td><?php echo $row1['abscissa'] ; echo ' , ';echo $row1['ordinate'];?></td>   
				   <td><?php echo $row1['Status'] ?></td>                
				   <td><button onclick="document.location.href='takeup_action.php?cid=<?php echo $cid ?>&id=<?php echo $id ?>'">Take up</button> 
					   <button onclick="document.location.href='complete_action.php?cid=<?php echo $cid ?>&id=<?php echo $id ?>'">Complete</button>
				   </td>
                   </tr>
              <?php  } ?>
		</table>
		<button class = "button" onclick="document.location.href='solved_complaints.php?id=<?php echo $id?>'" >View my solved Complaints</button>  
		<button class = "button" onclick="document.location.href='editprofile.php?id=<?php echo $id?>&user_type=0>'" >Edit Profile</button> 
		<button class = "button" onclick="document.location.href='signin_with_signup.php?user_type=0&state=0'" >Logout</button>   
		
		
	</center>
</html>
