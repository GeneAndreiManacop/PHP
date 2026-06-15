<?php
    // Set cookies with different expiration times
    setcookie("firstname", "Gene Andrei", time() + 10);
    setcookie("middlename", "Estrada", time() + 20);
    setcookie("lastname", "Manacop", time() + 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manacop - Personal Information Webpage</title>
    <script>
        let firstnameTimer = setInterval(function () {
            let element = document.getElementById("firstname-timer");
            if (element) {
                element.textContent = "(Can refresh)";
                element.style.color = "green";
            }
            clearInterval(firstnameTimer);
        }, 10000);

        let middlenameTimer = setInterval(function () {
            let element = document.getElementById("middlename-timer");
            if (element) {
                element.textContent = "(Can refresh)";
                element.style.color = "green";
            }
            clearInterval(middlenameTimer);
        }, 20000);

        let lastnameTimer = setInterval(function () {
            let element = document.getElementById("lastname-timer");
            if (element) {
                element.textContent = "(Can refresh)";
                element.style.color = "green";
            }
            clearInterval(lastnameTimer);
        }, 30000);
    </script>
</head>
<body>
    <main>
        <h2>Cookies</h2>
        
        <div class="results">
            <?php
                // Display firstname cookie
                if (isset($_COOKIE["firstname"])) {
                    echo "<p>First Name: " . $_COOKIE["firstname"] . " <span id='firstname-timer' style='color: gray;'>(Shouldn't refresh yet)</span></p>";
                } else {
                    echo "<p>First Name cookie has expired.</p>";
                }

                // Display middlename cookie
                if (isset($_COOKIE["middlename"])) {
                    echo "<p>Middle Name: " . $_COOKIE["middlename"] . " <span id='middlename-timer' style='color: gray;'>(Shouldn't refresh yet)</span></p>";
                } else {
                    echo "<p>Middle Name cookie has expired.</p>";
                }

                // Display lastname cookie
                if (isset($_COOKIE["lastname"])) {
                    echo "<p>Last Name: " . $_COOKIE["lastname"] . " <span id='lastname-timer' style='color: gray;'>(Shouldn't refresh yet)</span></p>";
                } else {
                    echo "<p>Last Name cookie has expired.</p>";
                }
            ?>
        </div>
        
    </main>


</body>
</html>