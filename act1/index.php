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
        $role = "Software Developer";
        $shs_school = "Cainta Catholic College";
        $shs_year = "2022 - 2024";
        $jhs_school = "Cainta  Catholic College";
        $jhs_year = "2018 - 2022";
        $gs_school = "Cainta Catholic College";
        $gs_year = "2011 - 2018";
        $profileSummary = "Aspiring Software Developer and current student at FEU Institute of Technology, specializing in Web and Mobile Applications. Passionate about building functional and user-centric applications with a strong foundation in database management and various programming languages.";
        $language1 = "English";
        $language2 = "Filipino";
        $skill1 = "Frontend Development";
        $skill2 = "Mobile App Architecture";
        $skill3 = "Database Management";
        $skill4 = "Version Control (Git)";
        
        $certification1_name = "IT Specialist - Databases";
        $certification2_name = "IT Specialist Java";
        $certification3_name = "IT Specialist - JavaScript";
        $certification4_name = "IT Specialist - Python";
        $certification_provider = "Pearson VUE Certiport";
        $certification_deadline_2030 = "Until 2030";
        $certification_deadline_2031 = "Until 2031";
        
        // I used arrays to make it easier. I apologize if this isn't allowed.
        $certificates = [
            ["IT Specialist - Databases", "Pearson VUE Certiport", "until 2030"],
            ["IT Specialist - Java", "Pearson VUE Certiport", "until 2030"],
            ["IT Specialist - JavaScript", "Pearson VUE Certiport", "until 2031"],
            ["IT Specialist - Python", "Pearson VUE Certiport", "until 2031"]
        ]
    ?>

    <main>
        <section class="left-section">
            <img src="profile_picture.jpg" alt="" class="profile-picture">
            <div class="info">
                <div>
                    <h2>Contact</h2>
                    <hr>
                </div>
                <div>
                    <h3>Address</h3>
                    <p><?= $location?></p>  
                </div>
                <div>
                    <h3>Phone</h3>
                    <p><?= $phoneNum?></p>
                </div>
                <div>
                    <h3>Email</h3>
                    <p><?= $email?></p>
                </div>
            </div>
            <div class="info list">
                <h2>Languages</h2>
                <hr>
                <ul>
                    <li><?= $language1 ?></li>
                    <li><?= $language2 ?></li>
                </ul>
            </div>
            <div class="info list">
                <h2>Skills</h2>
                <hr>
                <ul>
                    <li><?= $skill1 ?></li>
                    <li><?= $skill2 ?></li>
                    <li><?= $skill3 ?></li>
                    <li><?= $skill4 ?></li>
                </ul>
            </div>
        </section>
        <section class="right-section">
            <h1 class="name"><?= $fullName; ?></h1>
            <h2 class="role"><?= $role; ?></h3>
            <br>
            <div class="info">
                <h2>Profile</h2>
                <hr>
                <p class="profile-summary"><?= $profileSummary ?></p>
            </div>

            <div class="info">
                <h2>Educational Attainment</h2>
                <hr>
                <div class="attainments-list">
                    <div class="attainment-item">
                        <p>Senior High School</p>
                        <div>
                            <span><?= $shs_school; ?></span>
                            <span><?= $shs_year ?></span>
                        </div>
                    </div>
                    <div class="attainment-item">
                        <p>Junior High School</p>
                        <div>
                            <span><?= $jhs_school; ?></span>
                            <span><?= $jhs_year ?></span>
                        </div>
                    </div>
                    <div class="attainment-item">
                        <p>Grade School</p>
                        <div>
                            <span><?= $gs_school; ?></span>
                            <span><?= $gs_year ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- I used arrays to make my coding easier. I apologize if this is not allowed. -->
            <div class="info">
                <h2>Certifications</h2>
                <hr>
                <div class="info">
                    <div class="attainments-list">
                        <div class='attainment-item'>
                            <p><?= $certification1_name ?></p>
                            <div>
                                <span><?= $certification_provider ?></span>
                                <span><?= $certification_deadline_2030 ?></span>
                            </div>
                        </div> 
                        
                        <div class='attainment-item'>
                            <p><?= $certification2_name ?></p>
                            <div>
                                <span><?= $certification_provider ?></span>
                                <span><?= $certification_deadline_2030 ?></span>
                            </div>
                        </div> 
                        <div class='attainment-item'>
                            <p><?= $certification3_name ?></p>
                            <div>
                                <span><?= $certification_provider ?></span>
                                <span><?= $certification_deadline_2031 ?></span>
                            </div>
                        </div> 
                        <div class='attainment-item'>
                            <p><?= $certification4_name ?></p>
                            <div>
                                <span><?= $certification_provider ?></span>
                                <span><?= $certification_deadline_2031 ?></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>