<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["favcolor1"] = $_POST["color1"];
        $_SESSION["favcolor2"] = $_POST["color2"];
        $_SESSION["favcolor3"] = $_POST["color3"];
        $_SESSION["favcolor4"] = $_POST["color4"];
        $_SESSION["favcolor5"] = $_POST["color5"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <style>
        p {
            margin: 20px 20px;
        }
    </style>
    <title>Manacop - Result Colors</title>
</head>
<body>
    <main>
        <?php 
            if (isset($_SESSION["favcolor1"])) {
                $color1 = $_SESSION['favcolor1'];
                echo "<p> My Favorite Color 1 is: <span style='color:$color1'> $color1";
            }
            if (isset($_SESSION["favcolor2"])) {
                $color2 = $_SESSION['favcolor2'];
                echo "<p> My Favorite Color 2 is: <span style='color:$color2'> $color2";
            }
            if (isset($_SESSION["favcolor3"])) {
                $color3 = $_SESSION['favcolor3'];
                echo "<p> My Favorite Color 3 is: <span style='color:$color3'> $color3";
            }
            if (isset($_SESSION["favcolor4"])) {
                $color4 = $_SESSION['favcolor4'];
                echo "<p> My Favorite Color 4 is: <span style='color:$color4'> $color4";
            }
            if (isset($_SESSION["favcolor5"])) {
                $color5 = $_SESSION['favcolor5'];
                echo "<p> My Favorite Color 5 is: <span style='color:$color5'> $color5";
            }
        ?>
    </main>
</body>
</html>
