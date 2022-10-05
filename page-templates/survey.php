<?php

/**
 * Template Name: Survey
 */

$labels = [
    "english" => [
        "thank-you" => "Thank you for your comments",
        "submit" => "Submit",
        "question" => "How likely is it that you would recommend Santex to a friend or colleague?",
        "testimonial" => "Yes, you can use my comments as a testimonial.",
        "welcome" => "Welcome %s !",
        "detractors" => "How can Santex meet your expectations better?",
        "passive" => "What is the one thing we could do to make you happier?",
        "promoters" => "Thrilled to hear you’re doing so well with the company. <br> We were wondering if you could give us a quote that we can use as a testimonial.",
    ],
    "spanish" => [
        "thank-you" => "¡Gracias por tu comentario!",
        "submit" => "Enviar",
        "question" => "¿Qué tan probable es que recomiende Santex a un amigo o colega?",
        "testimonial" => "Si, mi comentario puede ser usado como recomendación.",
        "welcome" => "Bienvenido %s !",
        "detractors" => "¿Cómo puede Santex satisfacer mejor sus expectativas?",
        "passive" => "¿Qué es lo que podríamos hacer para servirte mejor?",
        "promoters" => "Encantados de saber que te va tan bien con la compañía... <br> Nos preguntábamos si podrías escribir algo que podamos usar como testimonio de tu experiencia con Santex.",
    ]
];

$token = "";
$language = "english";
$missed_token = true;
$malformed = false;
$name = "";
do_action("debugger_write_log", "-------------------------------------------------------------", "survey init");
do_action("debugger_write_log", "survey", "survey");

if (isset($_GET['t'])) {
    $base64 = $_GET['t'];

    $data = base64_decode($base64);
    $data = json_decode(($data));

    do_action("debugger_write_log", $data, "survey_data");


    if (isset($data->token)) {
        $token = $data->token;
        $name = $data->name;
        $language = $data->language;
        echo '<script>var token="' . $base64 . '"</script>';
        echo '<script>var language="' . $language . '"</script>';
        $missed_token = false;
    } else {
        $malformed = true;
    }
} else {
    $site_url = get_site_url();
    echo "<script>window.location='${site_url}'</script>";
}

get_header('survey');
setPostViews(get_the_ID());
?>


<?php
global $wpdb;

$query = "select * from {$wpdb->prefix}santex_survey_form where token='$token'";

$token_expired = $wpdb->get_results($query);

?>
<style>
    h3 {
        text-align: left;
    }

    .survey-div {

        /*width: 75%;*/
        margin-left: 0;
        margin-right: auto;
        text-align: left;
    }

    .survey-submit {
        width: 100%;
        margin-top: 20px;
        text-align: center;
    }

    .survey-div>p {
        width: 100% !important;
    }

    span.nps {
        width: 100%;
        height: 50px;
    }

    #nps-ok {
        width: 100%;

    }

    .button,
    button,
    input[type=button],
    input[type=reset],
    input[type=submit] {
        color: black;
    }

    /*
    .button:focus, .button:hover, button:focus, button:hover, input[type=button]:focus, input[type=button]:hover, input[type=reset]:focus, input[type=reset]:hover, input[type=submit]:focus, input[type=submit]:hover {
        color: black;
    }*/

    .survey-form-container {
        background-color: white;
        margin-bottom: 100px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 32px;
        border-radius: 5px;
        /*box-shadow:5px 5px 20px 5px grey;*/
    }

    #testimonial {
        margin-top: 8px;
        margin-left: 5px;
    }

    .entry-content,
    .page {
        background-color: white;

    }

    .entry-content {
        padding: 20px;
        padding-left: 0px;
        margin-left: 0px;
        font-family: Lato, sans-serif;
    }

    .entry-header {
        max-width: 700px;
        margin: auto;
    }

    .entry-header>h1 {
        /*font-family: 'Roboto', sans-serif;*/
        font-family: Neuton, serif;

        color: #000;
        margin-left: auto;
        margin-right: auto;
        display: block;
        font-size: 36px;
        font-weight: 300;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.08;
        letter-spacing: 1px;
        text-align: left;
    }

    .entry-header>h2 {
        font-family: Lato, sans-serif;
        font-size: 20px;
        font-weight: 400;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
    }

    .token {
        display: none;
    }

    textarea {
        resize: none !important;
    }

    .first {
        margin-left: 0px !important;
    }

    .nps {
        margin-left: 0px !important;
        text-align: center !important;
    }

    .survey-submit {
        /*width: 75%;*/
    }

    .entry-header h1,
    h2 {
        font-family: 'Red Hat Text' !important;
        font-weight: 500 !important;
    }

    .survey-div {
        font-family: 'Red Hat Text' !important;
    }

    input.wpcf7-submit {
        margin-left: 10%;
        width: 160px;
        font-weight: 400 !important;
        background-color: #ffffff !important;
        text-decoration: none;
        border: 1px solid #000000 !important;
        color: #1f1f1f !important;
        border-radius: 20px !important
    }

    input.wpcf7-submit:hover {
        background-color: #ababab !important;
        color: #ffffff !important;
        text-decoration: none;
        border: 1px solid #bababa !important;
    }

    .entry-header h1,
    .entry-header h2,
    #survey_question {
        text-align: center;
    }

    /*
    .wpcf7-submit {
        width: 150px !important;
        background-color: #ff3232;
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.2);
        border-radius: 15px !important;
        font-size: 14px;
        font-weight: 700;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.43;
        letter-spacing: 2.8px;
        text-align: center;
        color: #fff !important;
        font-family: Lato,sans-serif;
    }*/

    .wpcf7-list-item {
        cursor: pointer;
    }

    .wpcf7-list-item-label {
        float: left;
        display: block;
        padding-top: 5px;
        margin-left: 5px;
    }

    .wpcf7-list-item>input {
        -webkit-appearance: none;
        background-color: #fafafa;
        border: 1px solid #cacece;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 9px;
        border-radius: 3px;
        display: inline-block;
        position: relative;
        float: left;
        cursor: pointer;
        outline: none;
    }

    .wpcf7-list-item>input:focus {
        outline: none;
    }

    .wpcf7-list-item>input:active,
    .wpcf7-list-item>input:checked:active {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .wpcf7-list-item>input:checked {
        /*background-color: #e9ecee;*/
        border: 1px solid #adb8c0;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05), inset 15px 10px -12px rgba(255, 255, 255, 0.1);
        color: #99a1a7;
        outline: none;
    }

    .wpcf7-list-item>input:checked:after {
        content: '\2714';
        font-size: 14px;
        position: absolute;
        top: 0px;
        left: 3px;
        color: orangered;
    }



    .wpcf7-list-item.orange-ok>input:checked:after {
        content: '\2714';
        font-size: 14px;
        position: absolute;
        top: 0px;
        left: 3px;
        color: orange;
    }


    .wpcf7-list-item.green-ok>input:checked:after {
        content: '\2714';
        font-size: 14px;
        position: absolute;
        top: 0px;
        left: 3px;
        color: green;
    }

    /*.entry-content, .page, */

    .row.survey-form-container {
        background-color: white;
        margin: auto !important;
    }

    .title-h3 {
        margin-bottom: 52px;
        text-align: center;
        font-family: 'Red Hat Text' !important;
    }

    #survey_question,
    #survey_detractors_text,
    #survey_passive_text,
    #survey_promoters_text {
        font-size: 16px;
    }

    .slider-container {
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
        margin-top: 50px;

    }

    .scale {
        top: -25px !important;
    }

    .pointer-label.high {
        display: none !important;
    }

    .pointer.high {
        background: red !important;
        border-color: red !important;
        top: -6px !important;
    }

    .back-bar {
        height: 2px !important;
    }

    .scale>span {
        border: none !important;
    }

    .slider-container .scale ins {
        font-family: Lato, sans-serif !important;
        font-weight: bold !important;
        color: black !important;
        font-size: 14px !important;
        top: 0px !important;
        cursor: pointer;

    }

    .wpcf7-form-control-wrap.nps {
        display: none !important;
    }


    .header-main {
        float: right;
        margin-right: 4%;
    }

    .entry-title {
        font-family: Lato, sans-serif !important;
        font-weight: 400 !important;
        font-style: normal;
        font-stretch: normal;
        text-transform: none;
    }

    .valores {
        width: 50px;
        height: 300px;
        position: absolute;
        top: 0px;
        z-index: 100;
        top: 100px;
        right: 45px;
        display: none;
    }

    .values-item-img {
        width: 50px;
        height: 50px;
        float: right;
    }

    @media (max-width: 978px) {
        .header-main {
            float: none;
            margin-left: auto;
            margin-right: auto;
            padding-left: 0px !important;
        }

        #primary {
            padding-left: 0px;
        }

    }

    @media (max-width: 768px) {
        .valores {
            display: none;
        }

        #main {
            padding-left: 20px;
        }

        .santex-office>img {
            height: 40px;
            width: 200px;
        }


    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">


        <?php
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div id="client-survey-wrapper">
                <header class="entry-header">
                    <h1 class="entry-title">Client Satisfaction Survey </h1>
                    <?php
                    if (!$malformed) {
                        echo '<h2>' . sprintf($labels[$language]['welcome'], $name) . '</h2>';
                    }
                    ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="row survey-form-container">
                        <?php
                        if ($malformed) {
                            echo "<h3 class='title-h3'>There was a problem with the provided URL, <br>please verify it or contact us</h3>";
                        } else if ($token_expired) {
                            if ($missed_token) {
                                echo "<h3 class='title-h3'>There was a problem getting the token.</h3>";
                            } else {
                                if (isset($_GET['thank-you'])) {
                                    echo "<h3 class='title-h3'>" . $labels[$language]['thank-you'] . "</h3>";
                                } else {
                                    echo "<h3 class='title-h3'>The provided token has expired</h3>";
                                }
                            }
                        } else {
                            echo do_shortcode('[contact-form-7 id="122920" title="survey"]');
                        } ?>
                    </div>
                    <div class="valores">

                        <img class="values-item-img" src="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_participation/icon_participation.png" ?>" srcset="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_participation/icon_participation@2x.png" ?> 2x,
                             <?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_participation/icon_participation@3x.png" ?> 3x" />

                        <img class="values-item-img" src="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_trust/icon_trust.png" ?>" srcset="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_trust/icon_trust@2x.png" ?> 2x,
                             <?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_trust/icon_trust@3x.png" ?> 3x" />

                        <img class="values-item-img" src="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_courage/icon_courage.png" ?>" srcset="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_courage/icon_courage@2x.png" ?> 2x,
                             <?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_courage/icon_courage@3x.png" ?> 3x" />

                        <img class="values-item-img" src="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_passion/icon_passion.png" ?>" srcset="<?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_passion/icon_passion@2x.png" ?> 2x,
                             <?php echo get_site_url() . "/wp-content/themes/santex/assets/values/icon_passion/icon_passion@3x.png" ?> 3x" />


                    </div>
                </div>

            </div>

        </article>


        <!-- #post-<?php the_ID(); ?> -->
    </main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

?>

<link rel="stylesheet" href="https://santexgroup.com/wp-content/themes/santex/walking-the-talk.css">
<link rel="stylesheet" href="https://santexgroup.com/wp-content/themes/santex/css/jrange.css">
<script src="https://santexgroup.com/wp-content/themes/santex/js/jrange.min.js"></script>
<script>
    jQuery(document).ready(function() {


        var labels = <?php echo json_encode($labels); ?>;
        var url = '<?php echo $actual_link ?>';
        jQuery("#survey_question").text(labels[language]['question']);
        jQuery(".wpcf7-submit").val(labels[language]['submit']);
        jQuery("#survey_promoters_text").html(labels[language]['promoters']);
        jQuery("#survey_passive_text").text(labels[language]['passive']);
        jQuery("#survey_detractors_text").text(labels[language]['detractors']);
        jQuery("#testimonial").parent().find('.wpcf7-list-item-label').text(labels[language]['testimonial']);

        if (document.getElementsByName('token').length) {
            document.getElementsByName('token')[0].value = token;
            jQuery("input[name='token']").val(token);
        }



        var lastItems = jQuery(".wpcf7-form-control.wpcf7-checkbox.wpcf7-validates-as-required.wpcf7-exclusive-checkbox").find('.wpcf7-list-item');
        lastItems.slice(lastItems.length - 4).addClass("orange-ok");
        lastItems.slice(lastItems.length - 2).removeClass("orange-ok");
        lastItems.slice(lastItems.length - 2).addClass("green-ok");

        setTimeout(function() {
            jQuery("input[name='token']").val(token);
        }, 2000);


        document.addEventListener('wpcf7mailsent', function(event) {
            console.log("wpcf7mailsent");
            window.location.href = url + "&thank-you=true";

        }, false);



        jQuery('.wpcf7-form-control-wrap.nps').parent().append("<div class='single-slider'></div>");



        var width = jQuery(window).width();
        var range_width = 500;
        if (width < 768) {
            range_width = 400;
        }

        if (width < 500) {
            range_width = 250;
        }
        jQuery('.single-slider').jRange({
            from: 1,
            to: 10,
            step: 1,
            scale: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            format: '%s',
            width: range_width,
            showLabels: true,
            snap: true,
            onstatechange: function(val) {
                jQuery("input[name='token']").val(token);
                jQuery("input[name='nps']").prop('checked', false);
                // jQuery("input[value='"+val+"']").prop('checked', true);
                jQuery("input[value='" + val + "']").trigger('click');

                if (val < 7) {
                    jQuery('.selected-bar').css('background', 'red');
                } else if (val < 9) {
                    jQuery('.selected-bar').css('background', 'orange');
                } else {
                    jQuery('.selected-bar').css('background', 'green');
                }
            }
        });

        jQuery('.scale').find('span').find('ins').click(function() {
            jQuery('.single-slider').jRange('setValue', jQuery(this).text());
        });



    });
</script>