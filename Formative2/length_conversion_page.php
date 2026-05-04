<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conservation Page</title>
    <link rel="stylesheet" href="length_conversion_page_style.css">
</head>
<body>
    <?php
        $millimetres_per_centimetre = 10;
        $centimetres_per_decimetre = 10;
        $centimetres_per_metre = 100;
        $metres_per_kilometre = 1000;
        $inch_per_foot = 12;
        $feet_per_yard = 3;
        $yards_per_chain = 22;
        $yards_per_furlong = 220;
        $chains_per_furlong = 10;
        $yards_per_mile = 1760;
        $furlongs_per_mile = 8;

    ?>
    <main>
        <table>
            <tr>
                <th colspan='6'>Metric Conversions</th>
            </tr>
            <tr>
                <td class="unit">1 centimetre</th>
                <td class="equal-cell">=</th>
                <td class="unit"><?= $millimetres_per_centimetre?></th>
                <td class="unit">1 centimetre</th>
                <td class="equal-cell">=</th>
                <td class="unit"><?= $millimetres_per_centimetre?></th>
            </tr>
        </table>
    </main>
</body>
</html>