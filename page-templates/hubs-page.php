<?php
/**
 * Template Name: Hubs
 */
?>

<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="section-container">
                <div class="row">
                    <h3 class="contanier-title">
                        Agile Transformation
                    </h3>
                    <p class="container-sub-title">
                        <span>
                            We help companies transition to an Agile culture, which goes beyond a particular practice
                            or method. Instead, Agile focuses on change at all levels.
                        </span>
                    </p>
                </div>

                <div class="row">
                    <div class="hub-card">
                        <h5 class="hub-card-title">
                            Diagnosis
                        </h5>
                        <p class="hub-card-description">
                            In the first stage, we ran a pilot project to reveal our approach to the Agile framework.
                        </p>
                    </div>

                    <div class="hub-card">
                        <h5 class="hub-card-title">
                            Deployment
                        </h5>
                        <p class="hub-card-description">
                            We carry out training and coaching at all levels, from the C-Suite to operational levels, accompanying fieldwork.
                        </p>
                    </div>

                    <div class="hub-card">
                        <h5 class="hub-card-title">
                            Full-implementation
                        </h5>
                        <p class="hub-card-description">
                            We create an organizational roadmap that supports a long-term Agile framework, from conception of values to developing methods.
                        </p>
                    </div>

                </div>

                <div class="row">
                    <a id="orangey-red" href="/#contact-us" class="col-md-2">
                        GET STARTED
                    </a>
                </div>


            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <style>
        .hub-card {
            width: 388px;
            height: auto;
            border-radius: 8px;
            border: solid 1px #f1f1f1;
            background-color: #ffffff;
            padding: 16px;
            float: left;
            margin-left: 16px;
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
    </style>
<?php
//get_sidebar();
get_footer();

