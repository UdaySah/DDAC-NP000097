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
	table {
	  border-collapse: collapse;
	  width: 85%;
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

	.accept_btn{
		width: 80px;
		height: 25px;
		background: #00b894;
		border-radius: 40px;
		transition: all 0.3s ease 0s;
		margin: 10px auto;
		display: block;
		font-family: sans-serif;
		font-size: 13px;
		color: white;
		border:none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;	
		padding-top: 5px;

		
	}
	.accept_btn:hover{
		background-color:#EAB543;
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

<!-- header and Navigation Bar -->
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
			<li><a href="signin.php">Sign Out</a></li>
		</ul>
	</div>
</div>
</header>


 <!--- display Orders table-->
 <div  id="table_schedule">
  <center><h3>View Completed Orders</h3></center>
<?php
  require_once('DBConnection.php');
  if(mysqli_connect_errno($conn)){
    die('Failed to connect to MySQL: '.mysqli_connect_error());
  }

  $query = "SELECT *FROM orders where status='Delivered'";
  $result = mysqli_query($conn,$query);
  static $row_num = 0;

  if(mysqli_num_rows($result)>0){

    echo'<center><table ><tr><th>Order ID</th><th>Depature</th><th>Arrival</th><th>Sender Name</th><th>Sender Phone</th><th>Receiver Name</th><th>Receiver Phone</th><th>Container</th><th>status</th></tr>';
 
      while($row = mysqli_fetch_assoc($result)){
          $row_num++;
          echo'<tr><td>'.$row["Order_ID"].'</td><td>'.$row["Depature"].'</td><td>'.$row["Destination"].'</td><td>'.$row["Sender_name"].'</td><td>'.$row["Sender_Phone"].'</td><td>'.$row["Receiver_name"].'</td><td>'.$row["Receiver_Phone"].'</td><td>'.$row["container_model"].'</td><td>'.$row["status"].'</td></tr>';}
      echo'</center></table>';

  }else{
    echo "0 results";
  }


?>
</div>

 
<!-- For Footer Trademarks-->

<div class="footer"><p>Maersk Line Container Management System © 2019.</p></div>

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













