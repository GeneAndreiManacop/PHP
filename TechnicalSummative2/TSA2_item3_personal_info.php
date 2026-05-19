<?php 
    $fullName = "Gene Andrei E. Manacop";
    $phoneNum = "(+63) 912-345-6789";
    $email = "gemanacop@fit.edu.ph";
    $address = "Cainta, Rizal, Philippines";
    $role = "Software Developer";
    
    $profileSummary = "Aspiring Software Developer and current student at FEU Institute of Technology, specializing in Web and Mobile Applications. Passionate about building functional and user-centric applications with a strong foundation in database management and various programming languages.";
    $languages = array(
        "English", "Filipino"
    )
?>
<div class="box personal-info">
    <div class="name-title">
        <h2><?= $fullName ?></h2>
        <h3><?= $role ?></h2>
    </div>
    <div class="contact">
        <div class="field-name">Email: </div>
        <div class="field-name">Phone: </div>
        <div class="field-value"><?= $email ?></div>
        <div class="field-value"><?= $phoneNum ?></div>
    </div>
    <div class="field">
        <div class="field-name">Birth Date: </div>
        <div class="field-value">November 18, 2005</div>
    </div>
    <div class="field">
        <div class="field-name">Gender: </div>
        <div class="field-value">Male</div>
    </div>
    <div class="field">
        <div class="field-name">Languages: </div>
        <div class="field-value"><?= join(", ", $languages) ?></div>
    </div>
    <div class="field">
        <div class="field-name">Address: </div>
        <div class="field-value"><?= $address ?></div>
    </div>
</div>