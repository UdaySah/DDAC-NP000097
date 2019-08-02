<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<meta charset="utf-8">
	
<!-- For CSS Styling-->
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
		height: 380px;
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
	<!-- For Sing up  Form -->
		<h2>Sign In</h2>
		<form  method="post" >
			<center><p style="color:green; font-weight: bold;">
		<?php
			 require_once('DBConnection.php');
	  if(mysqli_connect_errno($conn)){
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	  }

			// Form Validation for Registration of Users
			  if(isset($_POST['submit'])){

					$data_missing = array();

					if(empty($_POST ['username'])){
					  $data_missing[]="Username must Required ";

					}else if(!PREG_MATCH('/^[a-zA-Z\s]+$/',$_POST ['username'])){ 		//username must be is only character
					$data_missing[]="Username should be Characters.";
					}				
					else{
					  $Username = trim($_POST ['username']);
					}
					
					if(empty($_POST ['password'])){
					  $data_missing[] = "Password must Required";
					}else if(strlen($_POST ['password'])<8){ 						// password must be more than 8 Digits 
						$data_missing[]="Password should be more than 8 digits";
					}else{
					  $Password = trim($_POST ['password']);
					}


					if(empty($_POST ['email'])){
					  $data_missing[]="Email must Required";
					}else if(filter_var($_POST ['email'],FILTER_VALIDATE_EMAIL)==true){			// for email validation
						$Email = trim($_POST ['email']);
					}
					else{
						$data_missing[]="Invalid Email.Please Insert Right again";
					}
				  
					if(empty($data_missing)){

					}else{
					  foreach($data_missing as $missing){
							echo '<p style="color:red;">'.$missing.'</p>';

					}
				  }
				$role=2;

				  if(empty($data_missing)){
					if($stmt = mysqli_prepare($conn,"INSERT INTO user(username,password,email,role)VALUES(?,?,?,?)")){
					  mysqli_stmt_bind_param($stmt,'sssi',$Username,$Password,$Email,$role);
					  mysqli_stmt_execute($stmt);
					  printf("Successfully Created a Customer.", mysqli_stmt_affected_rows($stmt));
					  mysqli_stmt_close($stmt);
					  
					}
				  }
				}
			?>
		</center></p>
			<div class="inputBox">
				<input type="text" name="username" required>
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="Password" name="password" required>
				<label>Password</label>
			</div>
			<div class="inputBox">
				<input type="text" name="email" required>
				<label>Email</label>
			</div>
			<select class="div_select" name="status"><br>
				  <!--for customer user-->
				  <option value="2">Customer</option>
			</select>
			<input type="submit" name="submit" value="Create">
			<div>
			<a class="left" href="signin.php">Sign In</a>
			<a class="right" href="index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>