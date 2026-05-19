<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TSA2_item2_style.css">
    <title>TSA 2 Item 2</title>
</head>
<body>
    <?php
        // Define functions to calculate volumes of different shapes
        function cubeVolume($edge) {
            return pow($edge, 3);
        }

        function rightRectangularPrismVolume($length, $width, $height) {
            return $length * $width * $height;
        }

        function cylinderVolume($radius, $height) {
            return pi() * pow($radius, 2) * $height;
        }

        function pyramidVolume($baseLength, $baseWidth, $height) {
            return (1/3) * $baseLength * $baseWidth * $height;
        }

        function sphereVolume($radius) {
            return (4/3) * pi() * pow($radius, 3);
        }

        // Define given values for the shapes
        $givenEdge = 5;
        $length = 5;
        $width = 3;
        $height = 4;
        $radius = 3;

    ?>
    <table>
        <tr>
            <th>Values</th>
            <th>Formula</th>
            <th>Volume</th>
        </tr>
        <tr>
            <td>a = <?= $givenEdge ?></td>
            <td>
                Cube Volume <br>(V = a<sup>3</sup>)
            </td>
            <td><?= cubeVolume($givenEdge) ?></td>
        </tr>
        <tr>
            <td>l = 5, w = 3, h = 4</td>
            <td>
                Right Rectangular Prism Volume <br>(V = l x w x h)
            </td>
            <td><?= rightRectangularPrismVolume($length, $width, $height) ?></td>
        </tr>
        <tr>
            <td>r = 3, h = 4</td>
            <td>
                Cylinder Volume <br>(V = π x r<sup>2</sup> x h)
            </td>
            <td><?= cylinderVolume($radius, $height) ?></td>
        </tr>
        <tr>
            <td>base length = 5, base width = 3, height = 4</td>
            <td>
                Pyramid Volume <br>(V = (1/3) x base length x base width x height)
            </td>
            <td><?= pyramidVolume($length, $width, $height) ?></td>
        </tr>
        <tr>
            <td>r = 3</td>
            <td>
                Sphere Volume <br>(V = (4/3) x π x r<sup>3</sup>)
            </td>
            <td><?= sphereVolume($radius) ?></td>
        </tr>
    </table>
</body>
</html>