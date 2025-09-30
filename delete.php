<?php
include "connection.php";

$id = $_GET["id"];
mysqli_query($conn, "DELETE FROM Laptops WHERE LaptopID = $id");

// Redirect to index.php
header("Location: index.php");
exit;
?>
<?php
include 'connection.php';
$id = $_GET['id'];