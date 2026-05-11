<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="technical_summative1_1_style.css">
</head>
<body>
    <?php 
        echo "<table>";
        for ($irow = 0; $irow <= 10; ++$irow) {
            echo "<tr>";
            for ($icolumn = 0; $icolumn <= 10; ++$icolumn){
                $num = $irow * $icolumn;
                echo "<td>$num</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>