<?php
/**
Template Name: Walking The Talk
 */
?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package santex
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="section-container" >
                <div class="row">
                    <h2 class="contanier-title walking-title">
                        Walking the talk
                    </h2>
                    <h3 class="container-sub-title walking-sub-title">
                        Holacracy
                    </h3>
                    <p class="container-sub-title walking-description">

                        Holacracy is the real-world-tested approach for structuring, governing, and running our purpose-driven, Agile company.

                        Everyone has greater clarity, autonomy and empowerment, and our organizational structure is continually evolving to meet the needs of our business.


                    </p>
                </div>

            </div>

            <div class="section-container" >
                <div class="row walking-block-container">
                    <div class="agile-teams walking-block" >
                        <span>Agile Teams</span>
                        <div class="walking-block-img">
                        </div>
                        <p>Multidisciplinary teams that collaborate for a shared goals with focus on the core process of the Company.</p>
                    </div>
                    <div class=" amp hidden-xs">
                        <div class="amp-img" style="background: url(<?php echo get_site_url()."/wp-content/themes/santex/assets/amp/&.png"?>) no-repeat center center; background-size: cover;" >
                        </div>
                    </div>
                    <div class=" boards walking-block">
                        <span>Boards</span>
                        <div class="walking-block-img">
                        </div>
                        <p>
                            Groups of employees that advise and monitor organizational aspects/issues related to technical, cultural and quality matters
                        </p>
                    </div>
                </div>

            </div>

            <div class="section-container our-purpose-container" >
                <div class="row">
                    <h3 class="container-sub-title walking-sub-title">
                        Our purpose
                    </h3>
                    <p class="container-sub-title walking-description our-purpose">
                        We Seek to Create Community
                    </p>
                    <p class="container-sub-title walking-description">

                        Great workplaces are the result of a shared frame of values that drive positive habits.<br>
                        Our workspace is built upon <b>these values</b>:
                    </p>
                </div>

            </div>


            <div class="section-container values-container" >
                <div class="row">
                    <div class="values-item">
                        <img class="values-item-img" src="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_passion/icon_passion.png"?>"
                             srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_passion/icon_passion@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_passion/icon_passion@3x.png"?> 3x"
                        />

                        <p>
                            <ul class="values-list">
                            <li>We inspire each other with our thirst for excellence and celebrate
                                our achievements.</li>
                            <li>We pursue goals aiming
                                to improve the overall performance of the team and organization.</li>
                            <li>We are always willing to learn.</li>
                            </ul>

                        </p>
                    </div>
                    <div class="values-item">
                        <img class="values-item-img" src="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_courage/icon_courage.png"?>"
                             srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_courage/icon_courage@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_courage/icon_courage@3x.png"?> 3x"
                        />

                        <p>
                        <ul class="values-list">
                            <li>We have flexibility to change our behavior or point of view to quickly
                                and appropriately adapt to different scenarios or people.</li>
                            <li>We are not afraid of changes.</li>
                            <li>We are results-oriented.</li>
                            </ul>

                        </p>
                    </div>
                    <div class="values-item">
                        <img class="values-item-img" src="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_participation/icon_participation.png"?>"
                             srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_participation/icon_participation@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_participation/icon_participation@3x.png"?> 3x"
                        />

                        <p>
                        <ul class="values-list">
                            <li>We get involved in organizational processes.</li>
                            <li>We foster changes to the process when the team or company goals are affected.</li>
                            <li>We encourage multi-channel decision making processes.</li>
                            </ul>

                        </p>
                    </div>
                    <div class="values-item">
                        <img class="values-item-img" src="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_trust/icon_trust.png"?>"
                             srcset="<?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_trust/icon_trust@2x.png"?> 2x,
                             <?php echo get_site_url()."/wp-content/themes/santex/assets/values/icon_trust/icon_trust@3x.png"?> 3x"
                        />

                        <p>
                        <ul class="values-list">
                            <li>We demonstrate consistently
                                strong performance so colleagues can rely upon us.</li>
                            <li>We build long-lasting
                                relationships based on respect.</li>
                            <li>We are quick to admit mistakes,
                                and we look to understand before being understood.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <style>
        .values-list {
            text-align: left;
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.44;
            letter-spacing: normal;
            color: #3d3d3d;

        }



    </style>
<?php
//get_sidebar();
get_footer();

