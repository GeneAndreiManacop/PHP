<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conservation Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $cm_to_mm_multiplier = 10;
        $dc_to_cm_multiplier = 10;
        $m_to_cm_multiplier = 100;
        $metres_per_kilometre = 1000;
        $inch_per_foot = 12;
        $feet_per_yard = 3;
        $yards_per_chain = 22;
        $yards_per_furlong = 220;
        $chains_per_furlong = 10;
        $yards_per_mile = 1760;
        $furlongs_per_mile = 8;

        $millimetre_to_inches = 25.4;
        $centimetre_to_inches = 2.54;
        $metre_to_inch_ratio = 39.37;
        $metre_to_foot_ratio = 3.281;
        $metre_to_yard_ratio = 1.094;
        $kilometre_to_yard_ratio = 1093.6133;
        $kilometre_to_mile_ratio = 0.62137;

        $foot_to_cm = 30.48;
        $yard_to_cm = 91.44;
        $yard_to_m = 0.9144;
        $mile_to_metre = 1609.344;
        $mile_to_kilometres = 1.609344;

    ?>
    <main>
        <table>
            <tr>
                <th colspan='6'>Metric Conversions</th>
            </tr>
            <tr>
                <td class="unit">1 centimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $cm_to_mm_multiplier; ?> millimetre</td>
                <td class="unit">1 cm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $cm_to_mm_multiplier; ?> mm</td>
            </tr>
            <tr>
                <td class="unit">1 decimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $dc_to_cm_multiplier; ?> centimetre</td>
                <td class="unit">1 dm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $dc_to_cm_multiplier; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 metre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $m_to_cm_multiplier; ?> centimetre</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $m_to_cm_multiplier; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 kilometre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $metres_per_kilometre; ?> metres</td>
                <td class="unit">1 km</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $metres_per_kilometre; ?> m</td>
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
                <td class="unit"><?= $yards_per_mile;?> yards (or <?= $furlongs_per_mile; ?> furlongs) </td>
                <td class="unit">1 mi</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= $yards_per_mile;?> yards (or <?= $furlongs_per_mile; ?> fur) </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th colspan='6'>Metric -> Imperial Conversions</td>
            </tr>
            <tr>
                <td class="unit">1 millimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 / $millimetre_to_inches; ?> inches</td>
                <td class="unit">1 mm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 / $millimetre_to_inches; ?> in</td>
            </tr>
            <tr>
                <td class="unit">1 centimetre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 / $centimetre_to_inches; ?> inches</td>
                <td class="unit">1 cm</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 / $centimetre_to_inches; ?> in</td>
            </tr>
            <tr>
                <td class="unit">1 metre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_inch_ratio; ?> inches</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_inch_ratio; ?> inch</td>
            </tr>
            <tr>
                <td class="unit">1 metre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_foot_ratio; ?> feet</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_foot_ratio; ?> ft</td>
            </tr>
            <tr>
                <td class="unit">1 metre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_yard_ratio; ?> yards</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $metre_to_yard_ratio; ?> yd</td>
            </tr>
            <tr>
                <td class="unit">1 kilometre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $kilometre_to_yard_ratio; ?> yards</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $kilometre_to_yard_ratio; ?> yd</td>
            </tr>
            <tr>
                <td class="unit">1 kilometre</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $kilometre_to_mile_ratio; ?> miles</td>
                <td class="unit">1 m</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $kilometre_to_mile_ratio; ?> mi</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th colspan='6'>Imperial -> Metric Conversions</td>
            </tr>
            <tr>
                <td class="unit">1 inch</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $centimetre_to_inches; ?> centimetre</td>
                <td class="unit">1 in</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $centimetre_to_inches; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 foot</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $foot_to_cm; ?> centimetre</td>
                <td class="unit">1 ft</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $foot_to_cm; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 yard</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $yard_to_cm; ?> centimetre</td>
                <td class="unit">1 yd</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $yard_to_cm; ?> cm</td>
            </tr>
            <tr>
                <td class="unit">1 yard</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $yard_to_m; ?> metres</td>
                <td class="unit">1 yd</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $yard_to_m; ?> m</td>
            </tr>
            <tr>
                <td class="unit">1 mile</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $mile_to_metre; ?> metres</td>
                <td class="unit">1 mi</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $mile_to_metre; ?> m</td>
            </tr>
            <tr>
                <td class="unit">1 mile</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $mile_to_kilometres; ?> kilometres</td>
                <td class="unit">1 mi</td>
                <td class="equal-cell">=</td>
                <td class="unit"><?= 1 * $mile_to_kilometres; ?> km</td>
            </tr>
        </table>
    </main>
</body>
</html>