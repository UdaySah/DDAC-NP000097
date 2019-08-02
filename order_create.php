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
		width: 600px;
		height:720px;
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

<!-- Create Order -->
<div class="order_cargo">
<form  method="post">
	<h2>Create Order</h2>
		<center><p style="color:green; font-weight: bold;">
			<?php

			  require_once('DBConnection.php');

			  if(mysqli_connect_errno($conn)){
				die('Failed to connect to MySQL: '.mysqli_connect_error());
			  }
				// Implementing Validation for empty and regex 
			  if(isset($_POST['submit'])){
				$data_missing = array();
				if(empty($_POST ['Depature'])){
				  $data_missing[]="Depature";

				}else if(!PREG_MATCH('/^[a-zA-Z\s]+$/',$_POST ['Depature'])){ 		//Departure fieled only accpet Characters
				   $data_missing[]="Depature should be Characters.";
				}
				else{
				  $Depature = trim($_POST ['Depature']);
				}

				if(empty($_POST ['Destination'])){
				  $data_missing[]="Arrival Field Required";
				}
				else if(!PREG_MATCH('/^[a-zA-Z\s]+$/',$_POST ['Destination'])){ 		//Arrival fieled only accpet Characters
				   $data_missing[]="Arrival Must be Characters.";
				}
				else{
				  $destination = trim($_POST ['Destination']);
				}

				if(empty($_POST ['Sender_name'])){
				$data_missing[] = "Sender name Field Required";
				}else if(!PREG_MATCH('/^[a-zA-Z\s]+$/',$_POST ['Sender_name'])){ 		//Sender name fieled only accpet Characters
				   $data_missing[]="Sender name Must be Characters.";
				}else{
				  $sender_name = trim($_POST ['Sender_name']);

				}

				if(empty($_POST ['Sender_Phone'])){
				  $data_missing[]="Sender Phone Field Required ";
				}else if(!PREG_MATCH('/^[0-9]*$/',$_POST ['Sender_Phone'])){ 		//Sender phone is only accept integer
				   $data_missing[]="Sender phone must be a Number.";
				}else if(strlen($_POST ['Sender_Phone'])<10){							// phone number must contain  more than 10 digits
					$data_missing[]="Please enter Correct Mobile number.";
				}
				else{
				  $sender_phone = trim($_POST ['Sender_Phone']);
				}

				if(empty($_POST ['Receiver_name'])){
				 $data_missing[] = "Receiver name Field Required";
				}else if(!PREG_MATCH('/^[a-zA-Z\s]+$/',$_POST ['Receiver_name'])){ 		//Receiver fieled only accpet Characters
				   $data_missing[]="Sender name must be Characters.";
				}
				else{
				  $receiver_name = trim($_POST ['Receiver_name']);
				}

				if(empty($_POST ['Receiver_Phone'])){
				  $data_missing[]="Receiver PhoneField Required";
				}else if(!PREG_MATCH('/^[0-9]*$/',$_POST ['Receiver_Phone'])){ 		//Receiver fieled only accpet integer
				   $data_missing[]="Receiver Phone Must be Number.";
				}else if(strlen($_POST ['Receiver_Phone'])<10){						// phone number must contain  more than 10 digits
					$data_missing[]="Please enter Correct Mobile number.";
				}
				else{
				  $receiver_phone = trim($_POST ['Receiver_Phone']);

				}

				if(empty($_POST ['model'])){
				  $data_missing[]="model";
				}else{
				  $model = trim($_POST ['model']);

				}

	
				if(empty($data_missing)){
				  echo "";
				}else{
				  foreach($data_missing as $missing){
						echo '<p style="color:red;">'.$missing.'</p>';
				}

			  }
			  $status='Process';
			  

			  if(empty($data_missing)){
				if($stmt = mysqli_prepare($conn,"INSERT INTO orders(Depature,Destination,Sender_name,Sender_Phone,Receiver_name,Receiver_Phone,container_model,status)VALUES(?,?,?,?,?,?,?,?)")){
				  mysqli_stmt_bind_param($stmt,'ssssssss',$Depature,$destination,$sender_name,$sender_phone,$receiver_name,$receiver_phone,$model,$status);
				  mysqli_stmt_execute($stmt);
				  printf("Successfully Ordered a Cargo.", mysqli_stmt_affected_rows($stmt));
				  mysqli_stmt_close($stmt);

				}

				

				$query=" UPDATE container set status='Process' where Model='$model'";

				if(mysqli_query($conn,$query)) {
				echo '';
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
			  }

			  }
			?>
			</P></center>
         
		<label>Model </label>
		<select class="div_select" name="model" >
				<?php require_once('DBConnection.php');

				$sql = mysqli_query($conn,"SELECT Model from container where status='Available'");
				while ($row = $sql->fetch_assoc()){
                unset($model);
                $model = $row['Model'];
				echo '<option value="'.$model.'">'.$model.'</option>';

				  }
				  
				?>
		</select><br>
				
		<label style="padding-top: 10px;"> Depature </label><br>
		<input class="div_input" type="text" name="Depature" placeholder="Depature" required><br>
		<label style="padding-top: 10px;">Arrival</label><br>
		<input class="div_input" type="text"  name="Destination" placeholder=" Destination" required><br>
		<label style="padding-top: 10px;">Sender Name</label><br>
		<input class="div_input" type="text" name="Sender_name" placeholder="Sender Name" required><br>
		<label style="padding-top: 10px;">Sender Phone</label><br>
		<input class="div_input" type="text" name="Sender_Phone" placeholder="Receiver Phone" required><br>				 
		<label style="padding-top: 10px;">Receiver Name</label><br>
		<input class="div_input" type="text"  name="Receiver_name" placeholder=" Receiver Name" required><br>
		<label  style="padding-top: 10px;">Receiver Phone</label><br>
		<input class="div_input" type="text" name="Receiver_Phone" placeholder="Receiver Phone" required>
				 


        
		<p></p><center>
        <Button class="bttn" type="submit" name="submit">Submit</button></center>


</form>
</div>

<!--- For Footer Trademarks -->

<div class="footer"><p>Maersk © 2019 Designed By Uday</p></div>

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













