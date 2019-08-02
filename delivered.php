<html>
<?php
$id = $_GET['id'];
//connection database
require_once("DBConnection.php");

if (mysqli_connect_errno($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql query to delete data

$sql="UPDATE container,orders set container.status='Delivered', orders.status='Delivered' where container.Model='$id' and orders.container_model='$id'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: /uday/completed_order.php'); 
    exit;
} else {
    echo "Error updating record";
    echo "<a href='completed_order.php'>go back previous page</a>";
}
?>
</html>
