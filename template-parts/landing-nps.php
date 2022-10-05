<div id="container-nps" class="section-container" >

    <div class="row">
        <h2 class="contanier-title">
            <?php echo get_theme_mod('landing_walking_the_talk_title')?>
        </h2>
        <h3 class="container-sub-title">
            <?php echo get_theme_mod('landing_walking_the_talk_sub_title')?>
        </h3>
    </div>

    <div class="row nps-indicators">
        <div class="nps" id="nps">
            <div class="nps-img">
                <img src="<?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_75.png"?>"
                     srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_75@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_75@3x.png"?> 3x"
                />
            </div>
            <p class="nps-value">NPS*: <?php
                $nps = get_theme_mod('walking_the_talk_nps');
                $nps = $nps ? $nps : 87;
                echo $nps;
                ?>
            </p>
            <p class="nps-value-description">*Net Promoter Score
                <?php
                $nps_year = get_theme_mod('walking_the_talk_nps_year');
                $nps_year = $nps_year ? $nps_year : 2019;
                echo $nps_year;
                ?> Results</p>
        </div>

        <div class="nps" id="er">
            <div class="nps-img">
                <img src="<?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_86.png"?>"
                     srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_86@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/nps/NPS_86@3x.png"?> 3x"
                />
            </div>
            <p class="nps-value">Employee Retention: <?php

                $er = get_theme_mod('walking_the_talk_er');
                $er = $er ? $er : 86;
                echo $er;
                ?>
                %</p>
            <p></p>
        </div>

    </div>


    <div class="row how-we-do-it col-md-4">
        <a href="/walking-the-talk">DISCOVER HOW WE DO IT</a>
        <span></span>
    </div>



    <hr class="hr-separator">
</div>
<style>


</style>

