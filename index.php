<?php
include "connection.php";

// Handle Insert
if (isset($_POST["insert"])) {
    mysqli_query($conn, "INSERT INTO Laptops (Brand, Model, Processor, RAM, Storage, Price)
        VALUES ('$_POST[brand]', '$_POST[model]', '$_POST[processor]', $_POST[ram], '$_POST[storage]', $_POST[price])");
    echo "<script>window.location.href=window.location.href;</script>";
}

// Handle Update
if (isset($_POST["update"]) && isset($_POST["id"])) {
    mysqli_query($conn, "UPDATE Laptops SET 
        Brand='$_POST[brand]', 
        Model='$_POST[model]', 
        Processor='$_POST[processor]', 
        RAM=$_POST[ram], 
        Storage='$_POST[storage]', 
        Price=$_POST[price] 
        WHERE LaptopID=$_POST[id]");
    echo "<script>window.location.href=window.location.href;</script>";
}

// Handle Delete
if (isset($_POST["delete"]) && isset($_POST["id"])) {
    mysqli_query($conn, "DELETE FROM Laptops WHERE LaptopID=$_POST[id]");
    echo "<script>window.location.href=window.location.href;</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laptop Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Laptop Entry Form</h2>
        <form method="post">
            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand" placeholder="Enter brand">
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" class="form-control" name="model" placeholder="Enter model">
            </div>
            <div class="form-group">
                <label>Processor:</label>
                <input type="text" class="form-control" name="processor" placeholder="Enter processor">
            </div>
            <div class="form-group">
                <label>RAM (GB):</label>
                <input type="number" class="form-control" name="ram" placeholder="Enter RAM">
            </div>
            <div class="form-group">
                <label>Storage:</label>
                <input type="text" class="form-control" name="storage" placeholder="Enter storage">
            </div>
            <div class="form-group">
                <label>Price ($):</label>
                <input type="number" step="0.01" class="form-control" name="price" placeholder="Enter price">
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <div class="col-lg-12 mt-4">
        <h2>Laptop Inventory</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>Storage</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = mysqli_query($conn, "SELECT * FROM Laptops");
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<form method='post'>";
                    echo "<td><input type='hidden' name='id' value='{$row['LaptopID']}'>{$row['LaptopID']}</td>";
                    echo "<td><input type='text' name='brand' value='{$row['Brand']}' class='form-control'></td>";
                    echo "<td><input type='text' name='model' value='{$row['Model']}' class='form-control'></td>";
                    echo "<td><input type='text' name='processor' value='{$row['Processor']}' class='form-control'></td>";
                    echo "<td><input type='number' name='ram' value='{$row['RAM']}' class='form-control'></td>";
                    echo "<td><input type='text' name='storage' value='{$row['Storage']}' class='form-control'></td>";
                    echo "<td><input type='number' step='0.01' name='price' value='{$row['Price']}' class='form-control'></td>";
                    echo "<td><button type='submit' name='update' class='btn btn-primary'>Update</button></td>";
                    echo "<td><button type='submit' name='delete' class='btn btn-danger'>Delete</button></td>";
                    echo "</form>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
