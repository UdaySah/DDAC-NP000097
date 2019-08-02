<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<meta charset="utf-8">
	<title>Maersk</title>
	<link rel="shortcut icon" href="img/icon.ico" />
	<!-- for font awesome  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- for CSS Styling  -->
<style type="text/css">
	body{
		margin:0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(img/6.jpg);
		background-size: cover;
	}
	.box{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 320px;
		height: 285px;
		background:rgba(0,0,0,0.8);
		padding: 40px;
		box-sizing: 0 15px 25px rgba(0,0,0,0.5);
		border-radius: 10px;
	}
	.box h2{
		margin: 0;
		padding: 0;
		color: #fff;
		text-align: center;
		text-transform: uppercase;
		margin-bottom: 10px;
	}
	.box .inputBox{
		position: relative;
	}
	.box .inputBox input{
		width: 100%;
		padding: 10px 0;
		font-size: 16px;
		letter-spacing: 1px; 
		margin-bottom: 30px;
		border: none;
		border-bottom: 1px solid #fff;
		outline: none;
		background: transparent;
		color:#fff;		
	}
	.box .inputBox label{
		position: absolute;
		top: 0;
		left: 0;
		padding: 10px 0;
		font-size: 16px;
		color: #fff;
		pointer-events: none;
		transition: 0.5s;
	}
	.box .inputBox input:focus ~ label,
	.box .inputBox input:valid ~ label{
		top: -18px;
		left: 0;
		color: #03a9f4;
		font-size: 12px;
	}
	.box input[type="submit"] {
		background: transparent;
		border: none;
		outline: none;
		color: #fff;
		background: #03a9f4;
		padding: 10px 20px;
		cursor: pointer;
		border-radius: 5px;
		margin-left: 110px;
	}
	.box input[type="submit"]:hover {
		background: orange;
		color: #000;
	}

	.div_select{
		width: 100%;
		height: 33px;
		border-radius: 5px;
		border: none;
		border: 1px solid #003e5e;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
		border-bottom: 1px solid #fff;
		float: left;
	}
	.left{
		float: left;
		margin-top: 10px;
		margin-left: 15px;
		padding-left:10px;

	}
	.right{
		float: right;
		margin-top: 10px;
		margin-right: 15px;
		padding-right:10px;

	}
	
	
	a{
		color: #03a9f4;
		text-decoration: none;
	}
	a:hover{
		color: #fff;
	
	}
</style>
</head>

<body>
	<div class="box">
	<!-- for SingIN  Form  -->
		<h2>Sign In</h2>
		<form  method="post" >
			<div class="inputBox">
				<input type="text" name="username" required>
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="Password" name="password" required>
				<label>Password</label>
			</div>
			<select class="div_select" name="status"><br>
				  <option value="1">Admin</option>
				  <option value="2">Customer</option>
			</select>

			<input type="submit" name="submit" value="Sign In">
			
			<center> <p><?php

					   require_once('DBConnection.php');
			  if(mysqli_connect_errno($conn)){
				die('Failed to connect to MySQL: '.mysqli_connect_error());
			  }


			   if(isset ($_POST['submit'])){
				 $Username = $_POST['username'];
				 $Password = $_POST['password'];
				 $Status = $_POST['status'];

				 $row = array();
				 $query = "SELECT * FROM user WHERE username = '$Username' and password = '$Password' and role='$Status'";
				 $getID= mysqli_fetch_assoc(mysqli_query($conn,$query));


				 $row [1]= $getID['username'];
				 $row [2]= $getID['password'];

				 if($row[1] == $Username && $row[2]== $Password){
				   if($Status == 1){
				   header("Location:/uday/admin_dashboard.php");
				 }else{
				   header("Location:/uday/customer_dashboard.php");
				 }
				 }else{
					echo '<p style="color:red;">Invalid!!! ,Username and Password</p>';
				}
			   }

			  ?>
        </p>
			
			<div>
			<a class="left" href="signup.php">Sign Up</a>
			<a class="right" href="index.php">Back</a>
			</div>
		</form>
	</div>
</body>
</html>