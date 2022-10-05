


<!-- Button trigger modal -->
<button type="button" id="mc-embedded-subscribe-mobile" class="mc-embedded-subscribe" data-toggle="modal" data-target="#exampleModalCenter">
    SUBSCRIBE ME!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div  id="form-xs" class="modal-content">
            <form class="sub-form">

                <input type="text" value="" name="FNAME" placeholder="My name is..." class="required subscribe-name"  required>
                <input type="email" value="" name="EMAIL" placeholder="My email is..." class="required subscribe-email"  required>
                <input type="submit" value="SUBSCRIBE ME!" name="subscribe" class="mc-embedded-subscribe" >

            </form>

        </div>
    </div>
</div>

<div id="alerts-container">
    <div class="alert alert-danger fade out" id="bsalert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <div id="mce-error-response"></div>
    </div>

    <div class="alert alert-success fade out" id="bsalert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <div id="mce-success-response"></div>
    </div>
</div>


<div id="subscribe-form" class="hidden-xs">
    <form class="sub-form">

        <input type="text" value="" name="FNAME" placeholder="My name is..." class="required subscribe-name" required>
        <input type="email" value="" name="EMAIL" placeholder="My email is..." class="required subscribe-email"  required>
        <input type="submit"  value="SUBSCRIBE ME!" name="subscribe" class="mc-embedded-subscribe" >
    </form>


</div>



<div style="display: none">
    <form action="//santexgroup.us9.list-manage.com/subscribe/post?u=255f443460d59d9fec3bc4077&id=aac216dbc3" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate" id="mc-embedded-subscribe-form">

        <input type="text" value="" name="FNAME" placeholder="My name is..." class="required subscribe-name valid" id="mce-FNAME" aria-required="true">
        <input type="email" value="" name="EMAIL" placeholder="My email is..." class="required subscribe-email valid" id="mce-EMAIL" aria-required="true">
        <input type="submit" id="submit-button" value="SUBSCRIBE ME!" name="subscribe" class="mc-embedded-subscribe">
    </form>
</div>


<style>

    #mce-error-response {
        font-family: 'Lato', sans-serif;
        font-size: 14px;
        text-align: center;
    }
    #form-xs {
        margin-left: auto;
        margin-right: auto;
        width: 90%;

    }
    #mce-LNAME {
        display: none;
    }
    #exampleModalCenter {
        margin-top:40% ;
        transition: visibility 0s linear 0.33s, opacity 0.33s linear;
    }

    #mc-embedded-subscribe-mobile {
        position: fixed;
        bottom: 0;
        margin-bottom: 0px;
        width:50vw;
        left:0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
        min-width: 140px;
        display: none;
        z-index: 1000;
    }
    .subscribe-name {
        width: 35%;
        float: left;
        font-family: 'Lato', sans-serif;
        font-size: 14px;
        font-weight: 500;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.43;
        letter-spacing: 0.4px;
        text-align: left;
        color: #a4a4a4;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        border-color: white;
        height: 40px;
        outline: none;
        box-shadow:none;
        padding-left:15px;
    }
    .subscribe-email {
        width: 35%;
        float: left;
        font-family: 'Lato', sans-serif;
        font-size: 14px;
        font-weight: 500;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.43;
        letter-spacing: 0.4px;
        text-align: left;
        color: #a4a4a4;
        border-color: white;
        height: 40px;
        outline: none;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: none ;
        padding-left:15px;
    }

    .subscribe-email:focus, .subscribe-name:focus {
        outline: none;
        box-shadow:none;
        border:none;
    }

    .mc-embedded-subscribe {
        width: 29%;
        border-radius: 20px !important;
        background-color: #4a7aff;
        float: right;
        font-family: 'Lato', sans-serif;
        font-size: 14px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.43;
        letter-spacing: 2.8px;
        text-align: center;
        color: #ffffff;
        height: 40px;

    }
    .mc-embedded-subscribe:focus {
        outline: none;
        box-shadow:none;
        border: none;
    }
    #subscribe-form {
        display: block;
        position: fixed;
        bottom: 0;
        height:40px;
        width: 70vw;
        max-width: 824px;
        display: block;
        margin-bottom: 20px;
        margin-right: auto;
        margin-left: auto;
        border-radius: 32px;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
        background-color: #ffffff;

        right: 0;
        left: 0;
        z-index: 9999;

    }

    #alerts-container {
        position: fixed;
        bottom: 0;
        top:auto;
        margin-top: 0px;
        right: 0;
        left: 0;
        width: 40vw;
        margin-bottom: 70px;
        margin-left: auto;
        margin-right: auto;
        z-index: 9;
    }

    @media(max-width: 800px) {
        #mc-embedded-subscribe-mobile {
            display: block;
        }

        #subscribe-form {
            display: none;
        }

        #alerts-container {
            z-index: 9999;
            bottom:auto;
            top:0;
            right: 0;
            left: 0;
            width: 90vw;
            margin-top: 50px;
            margin-bottom:0px;
            margin-left: auto;
            margin-right: auto;
        }
    }
    @media(max-width: 926px) {
        #subscribe-form {
            left: 5vw;
        }
    }

    @media(max-width: 800px) {
        .mc-embedded-subscribe {
            width:100%;
        }
        .subscribe-email {
            width: 100%;
            margin-bottom: 10px;
            border-radius: 20px;
        }
        .subscribe-name {
            width:100%;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            margin-bottom: 10px;
            border-radius: 20px;
        }
        #subscribe-form {
            margin-bottom: 150px;
        }
    }

    @media(max-width: 400px) {
        #mc-embedded-subscribe-mobile {
            padding-right: 0px;
            padding-left: 0px;
            font-size:12px;
            width: 154px !important;
        }

    }

    .slide-up
    {
        bottom: 0px !important;
    }

    .slide-down
    {
        bottom: -475px !important;
    }




</style>

<script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script>


    ( function( $ ) {
        $("#exampleModalCenter").ready(function() {
            $("#exampleModalCenter").on('show.bs.modal', function(){
//            $("#mc-embedded-subscribe-mobile").hide('slow');
//            $("#mc-embedded-subscribe-mobile").toggle('slide');
                $('#mc-embedded-subscribe-mobile').animate({bottom:'-300px'},500);

            });
            $("#exampleModalCenter").on('hide.bs.modal', function(){
                $('#mc-embedded-subscribe-mobile').animate({bottom:'0px'},500);

            });
        });

        $( window ).resize(function() {
            if($( window ).width() >= 800) {
                $('#exampleModalCenter').modal('hide');
            }

        });


        function moveForm(ready) {

        }


        $(document).ready(function () {
            (function ($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);

            $('#mce-error-response').bind("DOMSubtreeModified",function(){
                $(".alert-danger").show();
                $(".alert-danger").toggleClass('in out');
                $(".alert-success").hide();
            });
            $('#mce-success-response').bind("DOMSubtreeModified",function(){
                $(".alert-success").show();
                $(".alert-success").toggleClass('in out');
                $(".alert-danger").hide();
            });


            $(".sub-form").submit(function(e){
                e.preventDefault();
                name = $(this).find('.subscribe-name').val();
                email = $(this).find('.subscribe-email').val();
                $("#mce-FNAME").val(name);
                $(".subscribe-name").val(name);
                $("#mce-EMAIL").val(email);
                $(".subscribe-email").val(email);
                $("#submit-button").click();
            });
        });
    } )( jQuery );


</script>