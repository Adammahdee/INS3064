<?php
include "connection.php";

$id = $_GET["id"];
$brand = "";
$model = "";
$processor = "";
$ram = "";
$storage = "";
$price = "";

// Fetch laptop data
$res = mysqli_query($conn, "SELECT * FROM Laptops WHERE LaptopID = $id");
if ($row = mysqli_fetch_array($res)) {
    $brand = $row["Brand"];
    $model = $row["Model"];
    $processor = $row["Processor"];
    $ram = $row["RAM"];
    $storage = $row["Storage"];
    $price = $row["Price"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Edit Laptop Details</h2>
        <form method="post">
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand" value="<?php echo $brand; ?>">
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" class="form-control" name="model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label>Processor:</label>
                <input type="text" class="form-control" name="processor" value="<?php echo $processor; ?>">
            </div>
            <div class="form-group">
                <label>RAM (GB):</label>
                <input type="number" class="form-control" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label>Storage:</label>
