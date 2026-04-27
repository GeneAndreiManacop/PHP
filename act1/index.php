<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $fullName = "Gene Andrei E. Manacop";
        $phoneNum = "(+63) 912-345-6789";
        $email = "gemanacop@fit.edu.ph";
        $location = "Cainta, Philippines";
        $role = "Software Developer"
    ?>

    <main>
        <section class="left-section">
            <div class="info">
                <h2>Contact</h2>
                <hr>

                <h3>Address</h3>
                <p><?= $location?></p>
                
                <h3>Phone</h3>
                <p><?= $phoneNum?></p>

                <h3>Email</h3>
                <p><?= $email?></p>
            </div>
            <div class="info list">
                <h2>Languages</h2>
                <hr>
                <ul>
                    <li>English</li>
                    <li>Filipino</li>
                </ul>
            </div>
        </section>
        <section class="right-section">
            <h1><?= $fullName; ?></h1>
            <h3 class="role"><?= $role; ?></h3>
            <br>
            <div class="info">
                <h2>Profile</h2>
                <hr>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio eaque in rerum porro reprehenderit illo dolorum consequatur expedita asperiores, ea earum aliquam, molestiae ex similique magnam. Veritatis similique iusto enim!</p>
            </div>

            <div class="info education">
                <h2>Educational Attainment</h2>
                <hr>
                <div>
                    <p class="school">Senior High School</h6>
                    <div>
                        <span>Cainta Catholic College</span>
                        <span>2025 - 2026</span>
                    </div>
                </div>
                <div>
                    <p class="school">Junior High School</h6>
                    <div>
                        <span>Cainta Catholic College</span>
                        <span>2025 - 2026</span>
                    </div>
                </div>
                <div>
                    <p class="school">Grade School</h6>
                    <div>
                        <span>Cainta Catholic College</span>
                        <span>2025 - 2026</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>