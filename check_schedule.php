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
		top: 0;
		width: 100%;
		position:fixed;
		background-color: #324ab2;
		font-family: sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 1.5em;
		border:none;
	}
	.inner_main_menu{
		margin: 0 auto;
		width: 90%;
	
	}
	.inner_main_menu ul{
		margin: 0;
		padding-top: 10px;
		padding-bottom: 10px;
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
		color: #0652DD;
		text-transform: capitalize;
		font-size:15px;
		text-align: center;
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
		padding:0;
	}
	.logo{
		width: auto;
		height: 50px;
		position: absolute;
		left: 45%;
		top:0;
		content: "";

	}
	.order_cargo{
		background: #1B9CFC;
		width: 430px;
		height:620px;
		margin: 0 auto;
		margin-top: 100px;
		margin-bottom: 50px;
		border-radius: 6px;
		box-shadow: 0 14px 28px rgba(0,0,0, 0.25), 0 10px 10px rgba(0,0,0,0.22);
	}	
.div_p{
		background: #3B3B98;
		color: white;
		text-align: center;
		padding: 15px 0px 15px 0px;
		margin-bottom: 10px;
		border-radius: 6px;
		text-transform: uppercase;
	}
	.div_input{
		width: 330px;
		height: 25px;
		border: none;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 40px;
		padding-left: 5px;
	}
	.div_select{
		width: 340px;
		height: 25px;
		border: none;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 40px;
		padding-left: 5px;
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

	table {
	  border-collapse: collapse;
	  width: 50%;
	  margin-bottom: 30px;  

	}


	#table_schedule {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	  margin-top: 110px;
	  margin-bottom: 95px;

	}

	#table_schedule td, #table_schedule th {
	  border: 1px solid #324ab2;
	  padding: 8px;
	}

	#table_schedule tr:nth-child(even){background-color: #f2f2f2;}

	#table_schedule tr:hover {background-color: #ddd;}

	#table_schedule th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #324ab2;
	  color: white;
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
		<a href="customer_dashboard.php"><img style="height: 100px; width: auto;" src="img/mainlogo.png"></a>
	</div>
	<div class="inner_main_menu">
		<ul>
			<li><a href="order_create.php">Create Order</a></li>
			<li><a href="check_schedule.php">Check Schedule</a></li>
			<li><a href="check_container.php">Check Container</a></li>
			<li><a href="check_orders.php">Check Orders</a></li>
			<li><a href="signin.php">Sign Out</a></li>
		</ul>
	</div>
</div>
</header>

 <!--- display Schedule table-->
 <div  id="table_schedule">
 <center><h3>Check Schedule</h3></center>
	<?php
	  require_once('DBConnection.php');
	  if(mysqli_connect_errno($conn)){
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	  }

	  $query = "SELECT *FROM schedule";
	  $result = mysqli_query($conn,$query);
	  static $row_num = 0;

	  if(mysqli_num_rows($result)>0){

		echo'<center><table><tr><th>Departure</th><th>Depart Time</th><th>Arrival Time</th><th>Arrival</th></tr>';
		 
		  while($row = mysqli_fetch_assoc($result)){

			  echo'</center><tr><td>'.$row["Warehouse_Location"].'</td><td>'.$row["Depart"].'</td><td>'.$row["Destination"].'</td><td>'.$row["Arrival"].'</td></tr>';}
		  echo'</table>';

	  }else{
		echo "No values";
	  }
	?>
</div>

 


<!-- for scrollButton -->
<button onclick="upFuction()" id="MoveUp" title="to go up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></i></button>	
	<script>
	
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("MoveUp").style.display = "block";
	  } else {
		document.getElementById("MoveUp").style.display = "none";
	  }
	}

	function upFuction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>

 
</body>

</html>
