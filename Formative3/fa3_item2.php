<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fa3_item2_style.css">
    <title>FA3 Item 2</title>
</head>
<body>
    <?php 
        $numArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $sum = null;
        $difference = null;
        $product = null;
        $quotient = null;

        foreach ($numArray as $num) {
            if (is_null($sum) && is_null($difference) && is_null($product) && is_null($quotient)) {
                $sum = $num;
                $difference = $num;
                $product = $num;
                $quotient = $num;
            } else {
                $sum += $num;
                $difference -= $num;
                $product *= $num;
                $quotient /= $num;
            }
        }
    ?>

    <table>
        <th colspan=2>
            Array list: <?php
                foreach ($numArray as $num) {
                    echo $num.", ";
                }
            ?>
        </th>
        <tr>
            <td>
                Addition
            </td>
            <td>
                <?= $sum; ?>
            </td>
        </tr>
        <tr>
            <td>
                Subtraction
            </td>
            <td>
                <?= $difference; ?>
            </td>
        </tr>
        <tr>
            <td>
                Multiplication
            </td>
            <td>
                <?= $product; ?>
            </td>
        </tr>
        <tr>
            <td>
                Division
            </td>
            <td>
                <?= $quotient; ?>
            </td>
        </tr>
    </table>
</body>
</html>