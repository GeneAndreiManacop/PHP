<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranking</title>
</head>
<body>
    <?php
        $grade = 92;
        $ranking = "";

        if ($grade >= 93) {
            $ranking = "A";
        } elseif ($grade >= 90) {
            $ranking = "A-";
        } elseif ($grade >= 87) {
            $ranking = "B+";
        } elseif ($grade >= 83) {
            $ranking = "B";
        } elseif ($grade >= 80) {
            $ranking = "B-";
        } elseif ($grade >= 77) {
            $ranking = "C+";
        } elseif ($grade >= 73) {
            $ranking = "C";
        } elseif ($grade >= 70) {
            $ranking = "C-";
        } elseif ($grade >= 67) {
            $ranking = "D-";
        } elseif ($grade >= 63) {
            $ranking = "D";
        } elseif ($grade >= 60) {
            $ranking = "D-";
        } else {
            $ranking = "Below 60";
        }
    ?>

    <h3>Name: Gene Andrei E. Manacop</h3>
    <h3>Grade = <?= $grade; ?></h2>
    <h1>Ranking = <?= $ranking; ?></h2>
</body>
</html>