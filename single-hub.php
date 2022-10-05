<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package santex
 */

get_header();
setPostViews(get_the_ID());
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!--		--><?php
        while (have_posts()) :
            the_post();


            ?>

            <div class="section-container" style="margin-bottom: 48px">
                <div class="row">
                    <h3 class="contanier-title">
                        <?php echo get_the_title(); ?>
                    </h3>
                    <p class="container-sub-title">
                        <span>
                            <?php echo get_the_content(); ?>
                        </span>
                    </p>
                </div>

                <div class="row card-list">


                    <?php
                    $items = pods_field('items');

                    foreach ($items as $item) {

                        ?>
                        <div class="hub-card">
                            <h5 class="hub-card-title">
                                <?php echo $item['item-title'] ?>
                            </h5>
                            <div class="hub-card-description">
                                <?php $a= $item['item-description'];
                                    echo $a;
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>





            </div>

            <?php

        endwhile; // End of the loop.
        //		?>

        <?php get_template_part('template-parts/landing','contact');?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();

?>
<style>

    .card-list {
        margin-top: 80px;
        margin-right: auto;
        margin-left: auto;
        padding-right: 16px;
        padding-left: 16px;
    }

    .hub-card {
        width: 388px;
        height: auto;
        border-radius: 8px;
        border: solid 1px #f1f1f1;
        background-color: #ffffff;
        padding: 16px;
        float: left;
        margin-left: 16px;
        margin-bottom:16px;
    }

    .hub-card:first-child {
        margin-left: 0px;
    }

    .hub-card-title {
        font-family: 'Neuton', serif;
        font-size: 24px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.67;
        letter-spacing: normal;
        text-align: left;
        color: #000000;
    }

    .hub-card-description {
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #3d3d3d;
    }


    .hub-card-description > ul {
        list-style: none;
        padding-left: 16px;
    }
    .hub-card-description > ul > li::before {
        content: "\2022";
        color: #ff3232;
        display: inline-block;
        width: 1em;
        margin-left: -1em
    }

    @media (max-width: 1211px) {
        .card-list {
            max-width:824px;
        }

        .hub-card {
            margin-left: 0px;
        }


        .hub-card:nth-child(2n) {
           margin-left: 16px;

        }
    }
    @media (max-width: 824px) {
        .card-list {
            max-width:304px;
            padding-right: 8px;
            padding-left: 8px;
        }
        .hub-card {
            margin-right: 0px;
            margin-left: 0px;
            max-width: 288px;
        }
        .hub-card-title {
            font-size: 18px;
        }
        .hub-card-description {
            font-size: 14px;
        }
        .hub-card:nth-child(2n) {
            margin-left: 0px;

        }
    }

</style>

<script>
    ( function( $ ) {
        $(document).ready(function(){

            // Select and loop the container element of the elements you want to equalise
            $('.card-list').each(function(){

                // Cache the highest
                var highestBox = 0;

                // Select and loop the elements you want to equalise
                $('.hub-card', this).each(function(){

                    // If this box is higher than the cached highest then store it
                    if($(this).height() > highestBox) {
                        highestBox = $(this).height();
                    }

                });

                // Set the height of all those children to whichever was highest
                $('.hub-card',this).height(highestBox);

            });

        });
    } )( jQuery );


</script>
