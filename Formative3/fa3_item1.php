<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fa3_item1_style.css">
    <title>FA3 Item 1</title>
</head>
<body>
    
    <?php
        $people = array(
            array(
                "name" => "Jared Webb", 
                "image" => "webb.jpg", 
                "age" => 49, 
                "birthDate" => "4-3-1977", 
                "contactNum" => "(327) 471-4100"
            ),
            array(
                "name" => "Roberto Wheeler", 
                "image" => "roberto.jpg", 
                "age" => 20, 
                "birthDate" => "10-4-1944", 
                "contactNum" => "(746) 609-0778"
            ),
            array(
                "name" => "Johnni Murray", 
                "image" => "murray.jpg", 
                "age" => 20, 
                "birthDate" => "8/4/1955", 
                "contactNum" => "(266) 728-4029"
            ),
            array(
                "name" => "Billie Baker", 
                "image" => "baker.jpg", 
                "age" => 20, 
                "birthDate" => "8/5/1958", 
                "contactNum" => "(874) 964-6602"
            ),
            array(
                "name" => "Mark Reyes", 
                "image" => "reyes.jpg", 
                "age" => 20, 
                "birthDate" => "12/1/1945", 
                "contactNum" => "(440) 821-7203"
            ),
            array(
                "name" => "Kirk Mitchelle", 
                "image" => "mitchelle.jpg", 
                "age" => 20, 
                "birthDate" => "2/5/1990", 
                "contactNum" => "(830) 713-4803"
            ),
            array(
                "name" => "Robin West", 
                "image" => "west.jpg", 
                "age" => 20, 
                "birthDate" => "8/6/1963", 
                "contactNum" => "(391) 321-0988"
            ),
            array(
                "name" => "Sophie Welch", 
                "image" => "welch.jpg", 
                "age" => 20, 
                "birthDate" => "7/1/1975", 
                "contactNum" => "(575) 281-1410"
            ),
            array(
                "name" => "Aubree Wright", 
                "image" => "wright.jpg", 
                "age" => 20, 
                "birthDate" => "1/4/1968", 
                "contactNum" => "(608) 220-7811"
            ),
            array(
                "name" => "Jamie Hoffman", 
                "image" => "hoffman.jpg", 
                "age" => 20, 
                "birthDate" => "8/6/1963", 
                "contactNum" => "(768) 699-1447"
            ),
        )
    ?>
    <main>
        <div class="header">
            <p>no.</p>
            <p>Name</p>
            <p>Image</p>
            <p>Age</p>
            <p>Birth Date</p>
            <p>Contact Number</p>
        </div>
        <?php foreach ($people as $i => $person): ?>
            <div class="row">
                <p><?= $i + 1 ?></p>
                <p><?= $person["name"] ?></p>
                <img src= <?= $person["image"] ?> >
                <p><?= $person["age"] ?></p>
                <p><?= $person["birthDate"] ?></p>
                <p><?= $person["contactNum"] ?></p>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>