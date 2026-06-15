<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manacop - Personal Information Webpage</title>
</head>
<body>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <h2>GET Form</h2>
            <div class="field">
                <label for="firsname">First Name:</label><br>
                <input type="text" name="firstname" required>
            </div>
            <div class="field">
                <label for="firsname">Middle Name:</label><br>
                <input type="text" name="middlename" required>
            </div>
            <div class="field">
                <label for="firsname">Last Name:</label><br>
                <input type="text" name="lastname" required>
            </div>
            <div class="field">
                <label for="firsname">Date of Birth:</label><br>
                <input type="date" name="dateofbirth" required>
            </div>
            <div class="field">
                <label for="firsname">Address:</label><br>
                <input type="text" name="address" required>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>

        <div class="results">
            <?php
                if (isset($_GET["submit"])) {
                    echo "<p>First Name: " . $_GET["firstname"] . "</p>";
                    echo "<p>Middle Name: " . $_GET["middlename"] . "</p>";
                    echo "<p>Last Name: " . $_GET["lastname"] . "</p>";
                    echo "<p>Date of Birth: " . $_GET["dateofbirth"] . "</p>";
                    echo "<p>Address: " . $_GET["address"] . "</p>";
                }
            ?>
        </div>
        
    </main>


</body>
</html>