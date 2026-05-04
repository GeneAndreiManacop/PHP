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

        $millimetre_to_inches_ratio = 25.4;
        $millimetre_to_inches_ratio = 2.54;
        $metre_to_inch_ratio = 39.37;
        $metre_to_foot_ratio = 3.281;

    ?>
    <main>
        <table>
            <tr>
                <th colspan='6'>Metric Conversions</th>
            </tr>
            <tr>
                <td class="unit">1 centimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $millimetres_per_centimetre; ?> millimetre</td>
                <td class="unit">1 cm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $millimetres_per_centimetre; ?> mm</td>
            </tr>
            <tr>
                <td class="unit">1 decimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $centimetres_per_decimetre; ?> centimetre</td>
                <td class="unit">1 dm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $centimetres_per_decimetre; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 metre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $centimetres_per_metre; ?> centimetre</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $centimetres_per_metre; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 kilometre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $metres_per_kilometre; ?> metres</td>
                <td class="unit">1 km</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $millimetres_per_centimetre; ?> m</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th colspan='6'>Imperial Conversions</td>
            </tr>
            <tr>
                <td class="unit">1 foot</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $inch_per_foot; ?> inches</td>
                <td class="unit">1 ft</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $inch_per_foot; ?> in</td>
            </tr>
            <tr>
                <td class="unit">1 yard</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $feet_per_yard; ?> feet</td>
                <td class="unit">1 yd</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $feet_per_yard; ?> feet</td>
            </tr>
            <tr>
                <td class="unit">1 chain</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_chain; ?> yards</td>
                <td class="unit">1 ch</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_chain; ?> yd</td>
            </tr>
            <tr>
                <td class="unit">1 furlong</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_furlong;?> yards (or <?= $chains_per_furlong; ?> chains) </td>
                <td class="unit">1 fur</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_furlong;?> yD (or <?= $chains_per_furlong; ?> ch) </td>
            </tr>
            <tr>
                <td class="unit">1 mile</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_mile;?> yards (or <?= $furlongs_per_mile; ?> fur) </td>
                <td class="unit">1 mi</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_mile;?> yards (or <?= $furlongs_per_mile; ?> fur) </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th colspan='6'>Metric -> Imperial</td>
            </tr>
            <tr>
                <td class="unit">1 millimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= round(1 / $millimetre_to_inches_ratio, 5); ?> inches</td>
                <td class="unit">1 mm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= round(1 / $millimetre_to_inches_ratio, 5); ?> in</td>
            </tr>
            <tr>
                <td class="unit">1 centimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= round(1 / $millimetre_to_inches_ratio, 5); ?> inches</td>
            </tr>
            
        </table>
    </main>
</body>
</html>