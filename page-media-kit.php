<?php
/*
Template Name: Page Media Kit
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-958299033"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-958299033');
    </script>

    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://santexgroup.com/wp-content/themes/santex/assets/mediakit/page-media-kit.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div id="content" class="site-content">

<!-- Media Kit -->
<div class="new-santex-header">
    <div class="container-fluid black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="header-logo" src="https://santexgroup.com/wp-content/uploads/2022/08/santex-white.svg">
                </div>
                <div class="col-md-8 new-santex-header-menu">
                    <ul>
                        <li><a href="#">Our Culture</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#" class="btn btn-grey btn-small">Carrers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    

<div class="page-media-kit">
    <div class="container-fluid black page-featured left">
        <div class="container">
            <div class="media-kit-logo">
                <img src="https://santexgroup.com/wp-content/uploads/2022/08/x-white.svg">
                <h1>Santex<br>Media Kit</h1>
            </div>
            <h2><span>#</span>SharingSantexCulture</h2>
        </div>
    </div>

    <div id="services" class="container p-70 media-kit-search text-center">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <label>Type</label>
                <a href="#" class="btn btn-bordered-grey">All</a>
                <a href="#" class="btn btn-bordered-grey active">Logos</a>
                <a href="#" class="btn btn-bordered-grey">Images</a>
                <a href="#" class="btn btn-bordered-grey">Other</a>
            </div>
            <div class="col-md-5 media-kit-search-keyword">
                <label>Keyword</label>
                <input type="text" placeholder="Tell us what you need...">
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div class="container p-50 media-kit-list">
        <div class="row">
            <div class="col mb-20 media-kit-list-title">
                <input type="checkbox" data-type="logo" class="smk-select-all-checkbox">
                <h2>Logos</h2>
                <a href="#" class="btn btn-grey btn-small smk-zip-btn-all" data-type="logo">Download all assets</a>
                <a href="#" class="btn btn-black btn-small smk-zip-btn-selected" data-type="logo">Download selected</a>
            </div>
        </div>
        <div class="row smk-container" id="smk-logo-container">
            <?php
            $keywords = isset($_GET["keywords"]) ? $_GET["keywords"] : null;
            $posts = SantexMediaKit::get_media("logo",$keywords);
            ?>

            <?php foreach ($posts as $post) {

                ?>
                <div class="col-md-3 mb-20">
                    <div class="media-kit-list-item">
                        <div class="media-kit-item-image" style="background-repeat: no-repeat; background-position: center;background-size: contain; background-image: url('<?php echo $post->guid?>')">
                            <div class="media-kit-item-image-download">
                                <a href="<?php echo $post->guid?>" data-name="<?php echo $post->post_title?>" class="btn btn-white smk-download-image" download="" target="_blank">Download</a>
                            </div>
                        </div>
                        <div class="media-kit-item-detail">
                            <input type="checkbox" class="smk-checkbox smk-checkbox-logo" data-src="<?php echo $post->guid?>">
                            <span class="media-kit-item-name"><?php echo $post->post_title?></span>
                            <span class="media-kit-item-type"><?php echo strtoupper(str_replace("image/","",get_post_mime_type($post)))?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
        <div class="row">
            <a class="smk-load-more" data-type="logo" data-keyword="logo" data-page=1 href="#" style="background-color: beige; padding: 10px">Load more</a>
        </div>
    </div>

    <div class="container p-50 media-kit-list">
        <div class="row">
            <div class="col mb-20 media-kit-list-title">
                <input type="checkbox" data-type="images" class="smk-select-all-checkbox">
                <h2>Images</h2>
                <a href="#" class="btn btn-grey btn-small  smk-zip-btn-all" data-type="images">Download all assets</a>
                <a href="#" class="btn btn-black btn-small smk-zip-btn-selected" data-type="images">Download selected</a>
            </div>
        </div>
        <div class="row smk-container" id="smk-images-container">
            <?php
            $posts = SantexMediaKit::get_media("images",$keywords);
            ?>

            <?php foreach ($posts as $post) {

                ?>
                <div class="col-md-3 mb-20">
                    <div class="media-kit-list-item">
                        <div class="media-kit-item-image" style="background-repeat: no-repeat; background-position: center;background-size: contain; background-image: url('<?php echo $post->guid?>')">
                            <div class="media-kit-item-image-download">
                                <a href="<?php echo $post->guid?>" data-name="<?php echo $post->post_title?>" class="btn btn-white smk-download-image" download="" target="_blank">Download</a>
                            </div>

                        </div>
                        <div class="media-kit-item-detail">
                            <input type="checkbox" class="smk-checkbox smk-checkbox-images" data-src="<?php echo $post->guid?>">
                            <span class="media-kit-item-name"><?php echo $post->post_title?></span>
                            <span class="media-kit-item-type"><?php echo strtoupper(str_replace("image/","",get_post_mime_type($post)))?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

        <div class="row">
            <a class="smk-load-more" data-type="images" data-keyword="" data-page=1 href="#" style="background-color: beige; padding: 10px">Load more</a>
        </div>

    </div>

    <div class="footer-basic">
        <div class="container-fluid black text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-basic-logo mb-20">
                        <img src="https://santexgroup.com/wp-content/uploads/2022/08/santex-purpose-footer.svg">
                    </div>
                    <div class="col-md-4 footer-basic-social mb-20">
                        <a href="https://www.instagram.com/thesantexteam/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/SantexGroup" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/santexgroup" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://ar.linkedin.com/company/santexgroup" target="_blank"><i class="fab fa-linkedin"></i></a> 
                        <a href="https://www.youtube.com/TheSantexChannel" target="_blank"><i class="fab fa-youtube"></i></a> 
                    </div>
                    <div class="col-md-4 footer-basic-bcorp mb-20">
                        <img src="https://santexgroup.com/wp-content/uploads/2022/04/careers-bcorp-logo.svg">
                        <p class="footer-basic-bcorp">We Are a Certified<br>B Corporation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>   

</div>
<!-- Media Kit -->

</div><!-- #content pass -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>