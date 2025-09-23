<?php
echo "Hello, world!";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>This is my first PHP</h1>
    <p>This is x value: 8 . Hello!</p>

    <?php
        // http://localhost:8088/?x=5&y=7
        if (isset($_GET['x']) && isset($_GET['y'])) {
            $x = $_GET['x'];
            $y = $_GET['y'];
            $z = $x + $y;
            // Arithmetic Operators: +, -, *, /, %
            echo "The sum of x and y is: <br>" . $z;
            // comparison Operators: ==, !=, >, <, >=, <=
            echo "The value of x is: <br>" . $x;

        } else {
            $url = $_SERVER['PHP_SELF'] . "?x=5&y=7";
            echo "Please provide values for x and y in the URL. Example: <a href=\"$url\">$url</a>";
        }
    ?>php
    
<p>
<?php
    for ($count = 1; $count <= 10; $count++) {
        echo "$count times 12 is: " . $count * 12 . "<br/>";
    }
    ?>
    </p>

</body>
</html>

