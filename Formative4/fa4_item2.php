<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fa4_item2_style.css">
    <title>FA4 Item 2</title>
</head>
<body>
    <?php
        // 20 names in the array
        $arrayOfNames = array(
            "Alice",
            "Bob",
            "Charlie",
            "David",
            "Eve",
            "Frank",
            "Grace",
            "Heidi",
            "Ivan",
            "Judy",
            "Karl",
            "Leo",
            "Mallory",
            "Nina",
            "Oscar",
            "Peggy",
            "Quentin",
            "Rupert",
            "Sybil",
            "Trent"
        );
    ?>
    <header>List of names</header>
    <main>
        <div class="row header">
            <div class="column">Name</div>
            <div class="column">Number of Characters</div>
            <div class="column">Uppercase first character</div>
            <div class="column">Replace vowels with @</div>
            <div class="column">Check position of character "a"</div>
            <div class="column">Reverse name</div>
        </div>
        <?php foreach ($arrayOfNames as $name): ?>
            <div class="row data">
                <div class="column"><?= $name ?></div>
                <div class="column"><?= strlen($name) ?></div>
                <div class="column"><?= ucfirst($name) ?></div>
                <div class="column"><?= str_replace(['a', 'e', 'i', 'o', 'u'], '@', $name) ?></div>
                <div class="column"><?= strpos($name, 'a') !== false ? strpos($name, 'a') : 'N/A' ?></div>
                <div class="column"><?= strrev($name) ?></div>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>