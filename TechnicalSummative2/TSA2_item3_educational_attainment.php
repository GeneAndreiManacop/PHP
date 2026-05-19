<?php 
    $shs_school = "Cainta Catholic College";
    $shs_year = "2022 - 2024";
    $jhs_school = "Cainta  Catholic College";
    $jhs_year = "2018 - 2022";
    $gs_school = "Cainta Catholic College";
    $gs_year = "2011 - 2018";
?>
<div class="box full-width career-objective">
    <h2>Educational Attainment</h2>
    <div class="chip-list">
        <div class="chip">
            <span class="chip-dot"></span>
            <div class="chip-text">
                <div class="chip-title">Grade School</div>
                <div class="chip-sub"><?php echo $gs_school; ?> </div>
                <div class="chip-sub"><?php echo $gs_year; ?></div>
            </div>
        </div>

        <div class="chip">
            <span class="chip-dot"></span>
            <div class="chip-text">
                <div class="chip-title">Junior High School</div>
                <div class="chip-sub"><?php echo $jhs_school; ?> </div>
                <div class="chip-sub"><?php echo $jhs_year; ?></div>
            </div>
        </div>

        <div class="chip">
            <span class="chip-dot"></span>
            <div class="chip-text">
                <div class="chip-title">Senior High School</div>
                <div class="chip-sub"><?php echo $shs_school; ?> </div>
                <div class="chip-sub"><?php echo $shs_year; ?></div>
            </div>
        </div>
    </div>
</div>