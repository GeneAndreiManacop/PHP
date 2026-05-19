<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TSA2_item1_style.css">
    <title>TSA2 Item 1</title>
</head>
<body>
    <?php
        // Define 10 pre-defined fruit data
        $fruits = array(
            array(
                "image" => "apple.jpg",
                "name" => "Apple",
                "description" => "A sweet, edible fruit produced by an apple tree.",
                "fact" => "Apples are made of 25% air, which is why they float in water."
            ),
            array(
                "image" => "banana.jpg",
                "name" => "Banana",
                "description" => "A long, curved fruit that grows in clusters and has soft pulpy flesh and yellow skin when ripe.",
                "fact" => "Bananas are berries, but strawberries are not."
            ),
            array(
                "image" => "orange.jpg",
                "name" => "Orange",
                "description" => "A round juicy citrus fruit with a tough bright reddish-yellow rind.",
                "fact" => "Oranges are the largest citrus fruit group in the world."
            ),
            array(
                "image" => "grape.jpg",
                "name" => "Grape",
                "description" => "A berry, typically green (classified as white), purple, red, or black, growing in clusters on a grapevine.",
                "fact" => "Grapes are one of the most widely cultivated fruit crops in the world."
            ),
            array(
                "image" => "strawberry.jpg",
                "name" => "Strawberry",
                "description" => "A sweet soft red fruit with a seed-studded surface.",
                "fact" => "Strawberries are the only fruit with seeds on the outside."
            ),
            array(
                "image" => "watermelon.webp",
                "name" => "Watermelon",
                "description" => "A large fruit with a hard green rind and sweet watery red or yellow flesh.",
                "fact" => "Watermelons are 92% water."
            ),
            array(
                "image" => "pineapple.webp",
                "name" => "Pineapple",
                "description" => "A large juicy tropical fruit consisting of aromatic edible yellow flesh surrounded by a tough segmented skin and topped with a tuft of stiff leaves.",
                "fact" => "Pineapples take about 18-24 months to grow."
            ),
            array(
                "image" => "kiwi.jpg",
                "name" => "Kiwi",
                "description" => "A small fruit with a fuzzy brown skin and bright green flesh.",
                "fact" => "Kiwis are packed with nutrients, including vitamin C, vitamin K, and fiber."
            ),
            array(
                "image" => "mango.jpg",
                "name" => "Mango",
                "description" => "A tropical fruit with smooth skin, a large seed, and sweet yellow flesh.",
                "fact" => "Mangoes are the most widely consumed fruit in the world."
            ),
            array(
                "image" => "peach.jpg",
                "name" => "Peach",
                "description" => "A round stone fruit with juicy yellow flesh and downy pinkish-yellow skin.",
                "fact" => "Peaches are a member of the rose family."
            )
        );

        // Sort the fruits by name in ascending order
        // Since the fruits array is an array of associative arrays, we use array_multisort to sort by the 'name' key
        $fruitNames = array_column($fruits, 'name');
        array_multisort($fruitNames, SORT_ASC, $fruits);
    ?>
    <main>
        <div class="header">
            <h2>Image</h2>
            <h2>Name</h2>
            <h2>Description</h2>
            <h2>Fun Fact</h2>
        </div>
        <?php foreach ($fruits as $i => $fruit): ?>
            <div class="row">
                <img src= <?= $fruit["image"] ?> >    
                <p><?= $fruit["name"] ?></p>
                <p><?= $fruit["description"] ?></p>
                <p><?= $fruit["fact"] ?></p>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>