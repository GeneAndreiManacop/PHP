<?php 
    $certifications = array(
        [
            "name" => "IT Specialist - Databases",
            "provider" => "Pearson VUE Certiport",
            "deadline" => "Until 2030",
            "image" => "ITS-Databases.png"
        ],
        [
            "name" => "IT Specialist - Java",
            "provider" => "Pearson VUE Certiport",
            "deadline" => "Until 2030",
            "image" => "ITS-Java.png"
        ],
        [
            "name" => "IT Specialist - JavaScript",
            "provider" => "Pearson VUE Certiport",
            "deadline" => "Until 2031",
            "image" => "ITS-JavaScript.png"
        ],
        [
            "name" => "IT Specialist - Python",
            "provider" => "Pearson VUE Certiport",
            "deadline" => "Until 2031",
            "image" => "ITS-Python.png"
        ],
    );
?>
<div class="box full-width career-objective">
    <h2>Certifications</h2>
    
    <div class="chip-list">
        <?php foreach ($certifications as $certification): ?>
        <div class="chip">
            <span class="chip-dot has-image">
                <img src="<?= $certification['image'] ?>" alt="<?= $certification['name'] ?>">
            </span>
            <div class="chip-text">
                <div class="chip-title"><?= $certification['name'] ?></div>
                <div class="chip-sub"><?= $certification['provider'] ?></div>
                <div class="chip-sub"><?= $certification['deadline'] ?></div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>