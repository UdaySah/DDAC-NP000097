<html>
<?php
$id = $_GET['id'];
//Connect Database 
require_once("DBConnection.php");

// Check connection
if (mysqli_connect_errno($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}

//delete container 
$sql = "DELETE  FROM container WHERE container_id like '%$id%'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: /uday/container_check.php');
    exit;
} else {
    echo "Error deleting record";
    echo "<a class='btn-primary' href='container_check.php'>back</a>";
}
?>
</html>
