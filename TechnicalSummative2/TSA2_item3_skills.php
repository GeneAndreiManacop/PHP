<?php 
    $skills = array(
        "Front-end Development",
        "Mobile App Architecture",
        "Database Management",
        "Version Control (Git)"
    );
?>
<div class="box full-width career-objective">
    <h2>Skills</h2>
    
    <div class="chip-list">
        <?php foreach ($skills as $skill): ?>
        <div class="chip">
            <span class="chip-dot"></span>
            <div class="chip-text">
                <div class="chip-title"><?= $skill ?></div>
                
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>