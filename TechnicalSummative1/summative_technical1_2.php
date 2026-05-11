<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="technical_summative1_2_style.css">
</head>
<body>
    <table>
        <?php for ($irow = 0; $irow <= 10; ++$irow): ?>
            <tr>
            <?php for ($icolumn = 0; $icolumn <= 10; ++$icolumn): ?>
                <td><?= $irow * $icolumn ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    
</body>
</html>