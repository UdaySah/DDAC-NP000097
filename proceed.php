<html>
<?php
$id = $_GET['id'];
//Connect Database
require_once("DBConnection.php");

if (mysqli_connect_errno($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql query to delete a data

$sql="UPDATE container,orders set container.status='Loaded', orders.status='Loaded' where container.Model='$id' and orders.container_model='$id'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: order_process.php'); 
    exit;
} else {
    echo "Error updating record";
    echo "<a href='order_process.php'>press here to go back previous page</a>";
}
?>
</html>
