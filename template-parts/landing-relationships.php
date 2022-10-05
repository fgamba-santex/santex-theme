<div id="clients-container" class="section-container" >

    <div class="row" >
        <h2 class="contanier-title col-md-8">
            <?php echo get_theme_mod('landing_relationship_title')?>
        </h2>

    </div>

    <?php
    $brands = [
        "rbi",
        "carecloud",
        "accenture",
        "coldwell",
        "telstra",
        "mercadolibre",
        "cocacola",
        "trafilea",
        "macys",
        "espn",
        "macrohealth",
        "vistage",
        "signature",
        "grammy",
        "grezenbach",
        "workiva",
        "sirius",
        "origin",
        "uncovet",
        "register",
        "kony",
        "access",
        "ilumno",
        "ensighten",
        "fastcompany",
        "itagroup",
        "naranja",
        "agd",
        "grido",
        "lavu"
    ];
    $i = 0;
    $class="";
    ?>
    <div class="brand-gallery row" >

        <?php foreach ($brands as $brand) {
            if($i>3) {
                $class = 'hidden-xs';
            }
            ?>
        <div class="brand-item col-md-2 <?php echo $class;?>">
            <img class="brand-img <?php echo "brand-$brand"?>"
                 src="<?php echo get_site_url()."/wp-content/themes/santex/assets/brands/".$brand."-color/icon-".$brand."-color.png" ?>"
            >
        </div>

        <?php
        $i++;
        }
        ?>

    </div>


<!--    <div class="row our-cases">-->
<!--        <p>VIEW OUR CASES</p><span></span>-->
<!--    </div>-->

    <hr class="hr-separator">

</div>


<style>



</style>

<script>
//    $(document).ready(function() {
////        $( ".brand-item" ).hover(function() {
////            $(this).children('img').attr('src', $(this).children('img').data('hover'));
////        });
//
//        min_width = 792;
//
//        $(function(){
//
//            $('.brand-item').hover(function() {
//                if($( window ).width() <= min_width) {
//                    return;
//                }
////                $(this).find('img').attr('src', $(this).children('img').data('active'));
////                $(this).find('img').attr('srcset', $(this).children('img').data('active'));
//            }, function() {
//                if($( window ).width() <= min_width) {
//                    return;
//                }
////                $(this).find('img').attr('src', $(this).children('img').data('normal'));
////                $(this).find('img').attr('srcset', $(this).children('img').data('normal'));
//            })
//        })
//
//
//        if($( window ).width() <= min_width) {
////            $( ".brand-img" ).each(function( index ) {
////                $(this).attr('src', $(this).data('active'));
////            });
//
//        }
//        $( window ).resize(function() {
//            if($( window ).width() <= min_width) {
////                $( ".brand-img" ).each(function( index ) {
////                    $(this).attr('src', $(this).data('active'));
////                });
//
//            } else {
////                $( ".brand-img" ).each(function( index ) {
////                    $(this).attr('src', $(this).data('normal'));
////                });
//            }
//        });
//
//
//    });
</script>

<style>
    .brand-grammy {
        max-height: 50px;
    }

    .brand-transportation {
        max-height:50px;
    }
</style>

