<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Digit Loop</title>
</head>
<body>
    <?php 
        for ($i = 0; $i <= 99; $i++) {
            if ($i < 10) {
                echo "0".$i.", ";
            } else {
                echo $i.", ";
            }
        }
    ?>
</body>
</html>