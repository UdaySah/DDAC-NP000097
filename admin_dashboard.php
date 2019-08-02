<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maersk</title>
	<link rel="shortcut icon" href="img/icon.ico" />
	<!-- for font awesome  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- For CSS Styling -->	
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
	#scrollUp {
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

	#scrollUp:hover {
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


<div class="container">
<img src="img/udaybg.png" style="width:100%; padding-top: 15px;">
</div>



<!--- Welcome Home Section -->
<div class="div_section">
		<center>
		<h3 >Welcome to Maersk Line</h3>
		<p>As the world's largest container shipping company, we move 12 million containers every year and deliver to every corner of the globe</p>
		</center>
</div>






<!--- For Footer Trademark -->

<div class="footer"><p>Maersk © 2019 Designed By Uday</p></div>


<!-- for scrollButton Javascripts -->
<button onclick="topFunction()" id="scrollUp" title="to go up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></i></button>	
	<script>
	
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("scrollUp").style.display = "block";
	  } else {
		document.getElementById("scrollUp").style.display = "none";
	  }
	}

	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>




</body>
</html>