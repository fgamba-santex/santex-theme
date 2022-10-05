<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package santex
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div id="footer-information">
            <div class="row row-footer">
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
<!--                    <a id="site-logo" href="--><?php //echo esc_url( home_url( '/#home-container' ) ); ?><!--" rel="home">-->
                        <img src="<?php header_image(); ?>"  alt="" width="85px" height="17px">
<!--                    </a>-->
                </div>
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
                    <h5>SAN DIEGO</h5>
                    <p>6790 EMBARCADERO LANE <br>
                    SUITE 100<br>
                    CARLSBAD, CA 92011<br>
                        +1 (888) 622-7098
                    </p>
                </div>
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
                    <h5>DES MOINES</h5>
                    <p>699 WALNUT STREET<br>
                    SUITE 400-627<br>
                    DES MOINES,<br>
                    IA 50309-3962<br>
                    +1 (858) 737-7902
                    </p>
                </div>
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
                    <h5>LIMA</h5>
                    <p>JIRON COLINA 107<br>
                    BARRANCO<br>
                    LIMA, CP 04<br>
                    +51 (1) 248-8687
                    </p>

                </div>
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
                    <h5>CORDOBA</h5>
                    <p>VELEZ SARSFIELD 576<br>
                    PISO 4<br>
                    CORDOBA, X5000CCD<br>
                    +54 (351) 426-5110
                    </p>

                </div>
                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">
                    <h5>MEDELLIN</h5>
                    <p>CALLE 29 #41 - 105<br>
                        EDIFICIO SOHO<br>
                        EL POBLADO, MEDELLIN<br>
                        +57 (4) 403-1770
                    </p>

                </div>

<!--                <div class="col-md-2 santex-office col-xs-12 col-sm-2 ">-->
<!--                    <h5>MIAMI</h5>-->
<!--                    <p>6303 BLUE LAGOON <br>-->
<!--                        DRIVE SUITE 469<br>-->
<!--                        MIAMI, FL 33126<br>-->
<!--                        +1 (305)3 751-5011-->
<!--                    </p>-->
<!---->
<!--                </div>-->

            </div>
        </div>

		<div class="site-info">
            <div class="site-info-child">
                <div class="col-md-2 santex-year" >
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'santex' ) ); ?>">
                        © Santex 2019
                    </a>
                </div>


                <div id="social-toolbar">

                    <a href="https://www.facebook.com/SantexGroup" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                    <a  href="https://twitter.com/SantexGroup" target="_blank"> <i class="fab fa-twitter"></i></a>
                    <a  href="https://www.instagram.com/thesantexteam" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a  href="https://www.linkedin.com/company/santexgroup" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="http://www.youtube.com/TheSantexChannel" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<style>
    .santex-year {
        text-align: left;
        float:left;
        padding-top: 10px;
    }
    .site-info-child {
        width:100%;
        height: 100%;
        max-width: 1228px;
        margin-right: auto;
        margin-left: auto;
    }
    .row-footer {
        margin-right: auto;
        margin-left: auto;
    }
    .site-info {
        width: 100%;
        display: block;
        height: 50px;
        background: #000000;
        color: white;
        font-size: 14px;
        padding-top: 7px;
        text-align: center;
        /*text-transform: uppercase;*/
        /*padding-bottom: 10px;*/
        /*line-height: 30px;*/
    }
    .site-info a {
        color: white !important;
        text-decoration: none;
    }

    #footer-information {
        /*height: 195px;*/
        width:100%;
        background-color: #000000;
        color: white;
        padding-top: 35px;
    }
    #social-toolbar {
        display: inline-block;
        height: 35px;
        /*width: 300px;*/
        float: right;
        /*margin-right: 10px;*/
        padding-top: 10px;

    }
    #social-toolbar > a {
        display: block;
        height: 100%;
        width:50px;
        float: left;
        font-size: 14px;
    }

    .santex-office {
        font-family: 'Lato', sans-serif;
        font-size: 10px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: 2;
        letter-spacing: normal;
        text-align: left;
        color: #f7f7f7;
        padding-top: 10px;
        padding-left:0px;
        float: left;
        width: 14.27%;
    }

    .santex-office > p {
        margin-bottom: 7px;
    }

    .santex-office > img {
        float: left;
    }
    .santex-office > h5{
        font-size: 14px;
        margin-top: 0px;
    }

    @media (max-width: 986px) {
        .santex-office {
            text-align: center;
            margin-top: 32px;
            width: 100%;
        }
    }

    .santex-office:first-child {
        padding-left: 16px;
        padding-right: 0px;

    }


    @media(max-width: 987px){
        .santex-office:first-child {
            padding-left: 0px;
        }

        .santex-office > img {
            float: none;
        }

        .santex-office {
            padding-right: 0px;
        }
    }

    @media(max-width: 768px) {
        #social-toolbar > a {
            width: 30px;
        }

        .santex-office > img {
            width: 50%;
            height:100%;
        }
    }

    .icon_menu_mobile {
        background: url(<?php echo get_site_url()."/wp-content/themes/santex/assets/icon_menu_mobile/icon_menu_mobile.png" ?>) no-repeat center center;
        vertical-align: text-bottom;
        background-size: cover;
        height: 24px;
        width: 24px;
    }
</style>
