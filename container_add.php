<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maersk</title>
	<link rel="shortcut icon" href="img/icon.ico" />
	<!-- for font awesome  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<!-- for CSS Styling  -->
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background-color: #9AECDB;
	}
	header{
		top:0;
		background-color: #324ab2;
		font-family: sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 1.5em;
		width: 100%;
		border:none;
		position:fixed;
	}
	.inner_main_menu{
		margin: 0 auto;
		width: 90%;
	
	}
	.inner_main_menu ul{
		margin: 0;
		padding: 20px 0 0;
		list-style: none;
		text-align: right;
	}
	.inner_main_menu ul li{
		float: none;
		display: inline-block;
		margin-left: 60px;
		position: relative;
	}
	.inner_main_menu ul li ul{
		position: absolute;
		top:40;
		left: 0;
		width: 200px;
		background-color: #eee;
		padding: 0;
		display: none;
	}
	.inner_main_menu ul li:hover ul{
		left: 0;
		display: inline-block;
	}
	.inner_main_menu ul li ul li{
		float: left;
		width: 100%;
		text-align: left;
		margin-left: 0;
		padding-left: 0;
	}
	.inner_main_menu ul li ul li a{
		color: #000;
		text-transform: capitalize;
		font-size:15px;
	}
	.inner_main_menu ul li ul li a:hover{
		background-color: #888;
		color: #fff;

	}
	.inner_main_menu ul li:nth-child(1){
		float: left;
	}
	.inner_main_menu ul li:nth-child(2){
		float: left;
	}
	.inner_main_menu ul li:nth-child(3){
		float: left;
	}
	.inner_main_menu ul li a{
		color: white; 
		font-size: 15px;
		text-decoration: none;
		display: block;
		padding: 10px 20px;
	}
	.inner_main_menu ul li a:hover{
		color: #000;
		
	}
	#main_menu{
		width: 100%;
		height: auto;
		position: relative;
		margin-top:0;
	}
	.logo{
		width: auto;
		height: 50px;
		position: absolute;
		left: 47%;
		top:0;
		content: "";

	}
	.div_section{
		margin:30px 20px 20px 20px;
		font-family: sans-serif;
		color: #000;
	}
	.container_add{
		background: #1B9CFC;
		width: 600px;
		height:340px;
		margin: 0 auto;
		margin-top: 130px;
		margin-bottom: 120px;
		box-shadow: 0 14px 28px rgba(0,0,0, 0.25), 0 10px 10px rgba(0,0,0,0.22);

	}
	input[type=text], select {
	  width: 80%;
	  padding: 12px 20px;
	  margin-left:40px;
	  margin-top: 10px;
	  margin-bottom: 10px;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}
	h2{
		margin: 0px 0 15px;
		padding-top: 20px;
		text-align: center;
	}
	label{
		margin-top: 20px;
		margin-left: 30px;
		padding-left:10px;
		
	}
	.bttn{
		width: 100px;
		height: 40px;
		background: #3B3B98;
		border-radius: 60px;
		transition: all 0.3s ease 0s;
		margin: 10px auto;
		display: block;
		font-family: 'Josefin Sans', sans-serif;
		font-size: 16px;
		color: white;
		border:none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		
	}
	.bttn:hover{
		background-color: #EAB543;
	}
	
	.footer{
		background-color: #324ab2;
		color: #fff;
		width: 100%;
		height: 30px;
		text-align: center;
		font-family: sans-serif;
		font-size:13px;
		padding-top: 1.5px;
		padding-bottom: 3px;

	}
	#MoveUp {
	  display: none;
	  position: fixed;
	  bottom: 20px;
	  right: 30px;
	  z-index: 85;
	  font-size: 15px;
	  border: none;
	  outline: none;
	  background-color: #324ab2;
	  color: white;
	  cursor: pointer;
	  padding: 10px;
	  border-radius: 5px;
	  margin-bottom: 17px;
	}

	#MoveUp:hover {
	  background-color: #7f00ff;
	}
</style>

</head>
<body>

<!-- header and Navigation bar -->
<header>
<div id="main_menu">
	<div class="logo">
		<a href="admin_dashboard.php"><img style="height: 100px; width: auto;" src="img/mainlogo.png"></a>
	</div>
	<div class="inner_main_menu">
		<ul>
			<li><a href="admin_dashboard.php">Home</a></li>
			<li><a href="#">Container</a>
				<ul>
					<li><a href="container_add.php">Add Container</a></li>
					<li><a href="container_check.php">Check Container</a></li>
				</ul>
			</li>
			<li><a href="#">Schedule</a>
				<ul>
					<li><a href="schedule_add.php">Add Schedule</a></li>
					<li><a href="schedule_check.php">Check Schedule</a></li>
				</ul>
			</li>
			<li><a href="#">Cargo</a>
				<ul>
					<li><a href="cargo_order.php">Order Cargo</a></li>
					<li><a href="cargo_shift.php">Shift Cargo</a></li>
				</ul>
			</li>
			<li><a href="#">Check Order</a>
				<ul>
					<li><a href="order_process.php">Process</a></li>
					<li><a href="order_booked.php">Booked</a></li>
					<li><a href="completed_order.php">Completed</a></li>
				</ul>
			</li>
			<li><a href="signin.php">sign Out</a></li>
		</ul>
	</div>
</div>
</header>	

<!-- container add form -->
<div class="container_add">
  <form action="" method="post">
	<h2>Create Container</h2>
    <label for="fname">Model</label><br>
    <input id="fname" name="Model" type="text" placeholder="Enter Container Model"  required><br>

    <label for="lname">Description</label><br>
    <input id="lname" name="description" type="text" placeholder="Container Description"  required><br>

	<center><Button class='bttn' type="submit" name="submit">Submit</button></center>
		
			<center><p style="color:white; font-weight: bold;">
				<?php

				  require_once('DBConnection.php');

				  if(mysqli_connect_errno($conn)){
					die('Failed to connect to MySQL: '.mysqli_connect_error());
				  }

				  if(isset($_POST['submit'])){

					$data_missing = array();
					
					if(empty($_POST ['Model'])){
					  $data_missing[]=" Required Container Model ";

					}else {
						$model=trim($_POST ['Model']);
					}
					
					if(empty($_POST ['description'])){				  
					  $data_missing[]="Required description of Container";

					}else {
						$description=trim($_POST ['description']);
					}
					
					if(empty($data_missing)){
					  echo "";
					}else{
					  foreach($data_missing as $missing){
							echo '<p style="color:red;">'.$missing.'</p>';
					}
					}
					
					$container_id='';
					$status='Available';
					
				  if(empty($data_missing)){
					if($stmt = mysqli_prepare($conn,"INSERT INTO container(container_id,Model,description,status)VALUES(?,?,?,?)")){
					  mysqli_stmt_bind_param($stmt,'ssss',$container_id,$model,$description,$status);
					  mysqli_stmt_execute($stmt);
					  printf("Succefully Added a Container.", mysqli_stmt_affected_rows($stmt));
					  mysqli_stmt_close($stmt);
					}
				 

				  }

				  }
				?>
		</p></center>
</form>
</div>

 

<!-- For Footer Trademarks -->

<div class="footer"><p>Maersk Line Container Management System © 2019.</p></div>
</body>
</html>













