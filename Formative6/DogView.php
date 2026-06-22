<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dogs_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch records
    $sql = "SELECT id, dog_name, dog_breed, dog_age, dog_address, dog_color, dog_height, dog_weight FROM dog_info";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <a class="nav-link" href="DogRegister.php">&larr; Back to Registration Form</a>
    <h2 style="font-weight: normal; margin-top: 10px;">All Registered Dogs</h2>

    <?php
    // Check if there are records and display them
    if ($result->num_rows > 0) {

        $counter = 1;

        while($row = $result->fetch_assoc()) {
            echo "<div class='dog-card'>";
            echo "<div class='dog-title'>Dog " . $counter . "</div>";
            echo "Name: " . $row["dog_name"] . "<br>";
            echo "Breed: " . $row["dog_breed"] . "<br>";
            echo "Age: " . $row["dog_age"] . "<br>";
            echo "Address: " . $row["dog_address"] . "<br>";
            echo "Color: " . $row["dog_color"] . "<br>";
            echo "Height: " . $row["dog_height"] . " in<br>";
            echo "Weight: " . $row["dog_weight"] . " kg <br>";
            echo "</div>";

            // Increment the counter for the next dog
            $counter++;
        }
    } else {
        // Display message if no records are found
        echo "<div class='no-records'>No dog records found. Add some using the register form!</div>";
    }
    $conn->close();
    ?>
</div>

</body>
</html>