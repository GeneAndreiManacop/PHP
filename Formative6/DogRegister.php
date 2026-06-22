<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogs_db";

// Popup messsage string when query is successful or failed
$message = "";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if (isset($_POST['save'])) {
    $d_name = $_POST['dog_name'];
    $d_breed = $_POST['dog_breed'];
    $d_age = $_POST['dog_age'];
    $d_address = $_POST['dog_address'];
    $d_color = $_POST['dog_color'];
    $d_height = $_POST['dog_height'];
    $d_weight = $_POST['dog_weight'];

    $sql = "
            INSERT INTO dog_info (dog_name, dog_breed, dog_age, dog_address, dog_color, dog_height, dog_weight) 
            VALUES ('$d_name', '$d_breed', '$d_age', '$d_address', '$d_color', '$d_height', '$d_weight')
            ";

    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success-msg'>Information saved to the database successfully!</div>";
    } else {
        $message = "<div class='error-msg'>Error: " . $conn->error . "</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="register-page">

    <main class="container">
        <header>
            <h2>Dog Registration</h2>
        </header>

        <section>
            <?php echo $message; ?>
        </section>

        <form action="DogRegister.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="dog_name" required placeholder="e.g., Prince">
            </div>
            <div class="form-group">
                <label>Breed</label>
                <input type="text" name="dog_breed" required placeholder="e.g., Chow Chow">
            </div>
            <div class="form-group">
                <label>Age (years)</label>
                <input type="number" name="dog_age" required min="0" step="1" inputmode="numeric" placeholder="e.g., 4">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="dog_address" required placeholder="e.g., Bulacan">
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="dog_color" required placeholder="e.g., Brown">
            </div>
            <div class="form-group">
                <label>Height (in inches)</label>
                <input type="number" name="dog_height" required min="0" step="0.05" inputmode="decimal" placeholder="e.g., 2.5">
            </div>
            <div class="form-group">
                <label>Weight (in kg)</label>
                <input type="number" name="dog_weight" required min="0" step="0.05" inputmode="decimal" placeholder="e.g., 4.2">
            </div>
            <button type="submit" name="save">Save</button>
        </form>

        <footer>
            <a class="nav-link" href="DogView.php">View All Records &rarr;</a>
        </footer>
    </main>

</body>

</html>