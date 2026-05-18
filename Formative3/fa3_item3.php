<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fa3_item2_style.css">
    <title>FA3 Item 2</title>
</head>
<body>

    <table>
        <th colspan=2>
            My parameter values: <?php
                echo $param1 . ", " . $param2 .", " . $param3
            ?>
        </th>
        <tr>
            <td>
                Addition
            </td>
            <td>
                <?= add($param1, $param2, $param3); ?>
            </td>
        </tr>
        <tr>
            <td>
                Subtraction
            </td>
            <td>
                <?= subtract($param1, $param2, $param3); ?>
            </td>
        </tr>
        <tr>
            <td>
                Multiplication
            </td>
            <td>
                <?= multiply($param1, $param2, $param3); ?>
            </td>
        </tr>
        <tr>
            <td>
                Division
            </td>
            <td>
                <?= divide($param1, $param2, $param3); ?>
            </td>
        </tr>
    </table>
</body>
</html>