<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maersk</title>
	<link rel="shortcut icon" href="img/icon.ico" />
	<!-- for font awesome  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- for css styling -->	
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
	input[type=text], select {
	  width: 50%;
	  padding: 12px 20px;
	  margin-left:180px;
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
	.shift{
		width: 100%;
		height: 800px;
		margin-top: 90px;
		margin-bottom: 20px;
	}
	.search{
		width:600px;
		background: #1B9CFC;
		height:210px;
		margin-left: 340px;
		margin-top: 100px;
		margin-bottom: 20px;
		box-shadow: 0 14px 28px rgba(0,0,0, 0.25), 0 10px 10px rgba(0,0,0,0.22);

	}
	.shiftto{
		background: #1B9CFC;
		width: 600px;
		height:350px;
		margin-top: 0px;
		margin-left: 340px;
		margin-bottom: 20px;
		box-shadow: 0 14px 28px rgba(0,0,0, 0.25), 0 10px 10px rgba(0,0,0,0.22);

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
	h2{
		margin: 0px 0 15px;
		padding-top: 20px;
		text-align: center;
	}
	label{
		margin-top: 20px;
		margin-left: 170px;
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
			<li><a href="signin.php">Sign Out</a></li>
		</ul>
	</div>
</div>
</header>


<!--Search Existing Order ID to Modification -->
<div class="search">
<form  method="post">
	<h2>Search Order</h2>
	    <?php
		//session_start();
        require_once('DBConnection.php');

            if(isset($_POST['search'])){
                 if(empty($_POST['Order_ID'])){
                  echo'Please insert the order ID';
            }else{
             $search_value=$_POST["Order_ID"];
             require_once('DBConnection.php');
             if(mysqli_connect_errno($conn)){
               die('Failed to connect to MySQL: '.mysqli_connect_error());
             }

             $query = "SELECT *FROM orders WHERE Order_ID like '%$search_value%'";
             $result = mysqli_query($conn,$query);
             if(mysqli_num_rows($result)>0){
              $_SESSION['store_id'] = $search_value;
				
             }else{
               echo "0 results";
             }
           }
           }else{
             $_SESSION['store_id'] = 'No set yet ';
           }
    ?>
	<label> Order ID </label><br>
	
	<input class="div_input" type="text" name="Order_ID" placeholder="Enter Order ID" required>
	<br>
	<center><Button class="bttn" type="submit" name="search">Search</button></center>
</form>
</div>


 
<!-- Copy Search To Modification -->
<div class="shiftto">
<form  method="post">
	<h2>Shift Container</h2>
		<center><p style="color:green; font-weight: bold;">
			<?php
			if(isset($_POST['submit'])){

			  $warehouse_ID_chg = trim($_POST['Warehouse_ID_chg']);
			  $destination_chg = trim($_POST['Destination_chg']);
			  $store_id = trim($_POST['store_id']);
			require_once('DBConnection.php');
			if(mysqli_connect_errno($conn)){
			  die('Failed to connect to MySQL: '.mysqli_connect_error());
			}

			$query = "UPDATE orders SET Depature = '$warehouse_ID_chg' ,Destination = '$destination_chg' WHERE Order_ID ='$store_id'";

			if(mysqli_query($conn,$query)) {
				echo "Order Updated Successfully";
			} else {
				echo "Error Updating Orders: " . mysqli_error($conn);
			}
			}
			?>
			</p></center>
                <label> Order ID </label><br>
				<input class="div_input" type="text" name="store_id" value="<?php echo $_SESSION['store_id'];?>" ><br>
				<label> Warehouse Location </label><br>
				<input class="div_input" type="text" name="Warehouse_ID_chg" placeholder="Enter Warehouse Location" required><br>
				<label > Destination</label><br>
				<input class="div_input" type="text" name="Destination_chg" placeholder="Enter Destination" required>
				<br>
			<center><Button class="bttn" type="submit" name="submit">Shift</button></center>

</form>

</div>


<!-- For Footer Trademarks -->

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

</html>













