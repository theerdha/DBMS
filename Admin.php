<?php 
	$name = $_GET['name'];
	$state = $_GET['state'];
	$con = mysqli_connect("127.0.0.1","root","qwerty123","dbms-demo");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "SELECT * from End_User eu where eu.Adhaar_number = '999999999999'";
	$result = mysqli_query($con, $query);
	$row = $result->fetch_assoc();
	$name = $row["Name"];
	if($state == 0)$state_type = '%';	
	else if($state == 1)$state_type = 'RAG_PICKER';
	else if($state == 3)$state_type = 'COUNSELLOR';
	else if($state == 2)$state_type = 'MESS_MANAGER';

	$query1 = "SELECT r.Resp_Adhaar_number, c.Type, COUNT(*) as count, resp.Rating 
	from Resolves r, Complaint c, Respondent resp 
	where r.Resp_Adhaar_number = resp.Adhaar_number and r.Complaint_ID = c.Complaint_ID and resp.Type like '$state_type'
	GROUP BY r.Resp_Adhaar_number,c.Type, resp.Rating";
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
				background-color: #14d18c; /* Green */
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
               while ($row1 = $result1->fetch_assoc()) {$resp_id=$row1['Resp_Adhaar_number']?>
                   <tr>
				   <td><?php echo $row1['Resp_Adhaar_number'];?></td>
				   <td><?php echo $row1['Type'];?></td>
                   <td><?php echo $row1['count'];?></td>
                   <td><?php echo $row1['Rating'];?></td>
                   <td><form action = "rating_update.php?resp_id=<?php echo $resp_id?>&id=999999999999" method = "POST">
					 <select name = "Rating">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
				  </select>
					<button type = "submit">Update</button>
					</form>
				 </td>
                   
                   </tr>
              <?php  } ?>
		</table><br/> <br/>
		<button class = "button" onclick="document.location.href='Admin.php?user_type=2&state=1'" >Analyse Rag Pickers</button>  
		<button class = "button" onclick="document.location.href='Admin.php?user_type=2&state=2'">Analyse Mess workers</button> 
		<button class = "button" onclick="document.location.href='Admin.php?user_type=2&state=3'">Analyse Counsellors</button> 
		<button class = "button" onclick="document.location.href='Admin.php?user_type=2&state=0'">Analyse All</button> 
		<button class = "button" onclick="document.location.href='signin.php?user_type=2&state=0'" >Logout</button> 
		
	</center>
</html>
