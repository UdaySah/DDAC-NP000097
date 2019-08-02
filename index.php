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
		background-image: url(img/udaybg.png);
		font-family: sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 1.5em;
		width: 100%;
		height: 550px;
	}
	.inner_main_menu{
		margin: 0 auto;
		width: 50%;
	
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
		left: 45%;
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


<!-- header and Navigation bar -->
<header>
<div id="main_menu">
	<div class="logo">
		<a href="index.php"><img style="height: 100px; width: auto;" src="img/mainlogo.png"></a>
	</div>
	<div class="inner_main_menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="signin.php">Sign In</a></li>
		</ul>
	</div>
</div>
</header>	
	
	


<!-- Introduce Home Section  -->
<div class="div_section">
		<center>
		<h2 >Welcome Maersk Inc.</h2>
		<p>We carry millions of tons of cargo every single day. Our vast network covers over 300 ports in more than 120 countries, giving you a fast, reliable and regular connection to all corners of the globe..</p>
		</center>
</div>	
	
	
	
<!--- For Footer Tradmarks  -->

<div class="footer"><p>Maersk © 2019 Designed By Uday</p></div>


<!-- for scrollButton javascripts -->
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













