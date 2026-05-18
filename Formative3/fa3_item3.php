<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fa3_item3_style.css">
    <title>FA3 Item 3</title>
</head>
<body>
    <?php 
        function add($num1, $num2, $num3) {
            return $num1 + $num2 + $num3;
        }
        
        function subtract($num1, $num2, $num3) {
            return $num1 - $num2 - $num3;
        }
        
        function multiply($num1, $num2, $num3) {
            return $num1 * $num2 * $num3;
        }
        
        function divide($num1, $num2, $num3) {
            return $num1 / $num2 / $num3;
        }
        
        $param1 = 25;
        $param2 = 13;
        $param3 = 6;
    ?>

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