<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'NP000097-DDAC';

//Establishes the connection of Database
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name);

?>
