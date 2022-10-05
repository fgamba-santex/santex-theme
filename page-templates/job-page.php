<?php
/**
        Template Name: Jobs
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
    <script src="https://boards.greenhouse.io/embed/job_board/js?for=santex"></script>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div id="container-jobs" class="section-container" >

                <?php if(!isset($_GET['gh_jid'])) {?>
                <div class="row row-job-description">
                    <h1 class="contanier-title">
                        <?php echo get_theme_mod('landing_jobs_title')?>
                    </h1>
                    <h3 class="container-sub-title">

                        <?php echo get_theme_mod('landing_jobs_sub_title')?>

                    </h3>
                </div>

                <div class="row row-job-list">
                    <div id="grnhse_app"></div>
                </div>

                <?php } else {?>

                <div class="row row-job">
                    <div id="grnhse_app"></div>
                </div>
                <?php }?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <style>
        #container-jobs {
            padding-top: 120px;
            max-width: 100%;

        }
        .row-job-list,.row-job-description {
            margin-right: auto;
            margin-left: auto;
            /*padding-left: 16px;*/
            padding-right: 16px;
            margin-bottom:16px;
        }
        .row-job {
            width:100%;
            max-width: 100%;
            margin-left:auto;
            margin-right: auto;

        }

        @media (max-width: 1220px) {
            .row-job-list {
                max-width: 950px;
            }
        }
        @media (max-width: 910px) {
            .row-job-list {
                max-width: 622px;
            }


        }

        @media (max-width: 601px) {
            .row-job-list {
                max-width: 320px;
            }




        }

    </style>
<?php
//get_sidebar();
get_footer();

