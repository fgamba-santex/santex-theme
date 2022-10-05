<?php
/*
Template Name: Page Contact
 */
?>

<?php get_header();?>

<div class="page page-contact">
    <div class="container-fluid black page-featured">
        <div class="featured-overlay"></div>
        <div class="container">
            <h1>Lets Talk</h1>
            <h2>Lets build your team together</h2>
        </div>
    </div>

    <div class="container-940 p-70">
        <div class="row">
            <div class="col">
                <h5 class="text-center">New projects, feedback, quotes, inquires — we are here for it all.</h5>
                <div class="space-50"></div>
                <?php echo do_shortcode("[vfb id=1]") ?>
				 
            </div>
        </div>
		 
    </div>
	<script type="text/javascript" >
	jQuery(document).ready(function(){  
	  jQuery("#contact_form").submit(function(e){
		e.preventDefault();   
		var temp = "<?php echo get_site_url() ?>";
		var url =   temp + "/wp-json/email/name";  
		var data =  { 
		   email  :  jQuery("#form-field-email").val() ,
		   name   :  jQuery("#form-field-name").val() ,
		   message :  jQuery("#form-field-message").val(),
		   telephone :  jQuery("#form-field-telephone").val(),
		}; 
		jQuery.ajax({
			type: "POST",
			url: url,
			data: data 
		})
		.success(function(data) { 
			jQuery("#success").html("<p >Email sent successfully, we will be in touch very soon! </p>");
			 
			return false;
		})
		.done(function (data){alert("done");
			jQuery("#success").html("<p >Email sent successfully, we will be in touch very soon! </p>");
			 
			return false;
		})
	  });
	}); 					  
	</script>

    <div class="footer black p-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="../wp-content/uploads/2020/05/santex-white.svg">
                    <div class="space-30"></div>
                    <img src="../wp-content/uploads/2020/05/footer-bcorp.svg">
                </div>
                <div class="col-md-3">
                    <h3>United States</h3>
                    <div class="sep-grey-50"></div>
                    <h5>SAN DIEGO</h5>
                    <p>6790 Embarcadero Lane</p>
                    <p>Suite 100, Carlsbad, CA 92011</p>
                    <p>+1 (888) 622-7098</p>
                    <div class="space-15"></div>
                    <h5>MIAMI</h5>
                    <p>61951 NW 7TH Ave #600</p>
                    <p>Miami, FL 33136, USA</p>
                    <p>+1 (888) 622-7098</p>
                </div>
                <div class="col-md-3">
                    <h3>Latin America</h3>
                    <div class="sep-grey-50"></div>
                    <h5>CÓRDOBA</h5>
                    <p>Humberto 1º 630 – Piso 9.</p>
                    <p>Distrito Capitalinas. Córdoba, Argentina.</p>
                    <p>+54 (0351) 589 7070</p>
                    <div class="space-15"></div>
                    <h5>LIMA</h5>
                    <p>Jiron Colina 107</p>
                    <p>Barranco Lima, CP 04</p>
                    <p>+51 (1) 248-8687</p>
                    <div class="space-15"></div>
                    <h5>MEDELLÍN</h5>
                    <p>Calle 29 #41 - 105</p>
                    <p>Edificios Soho, El Poblado, Medellin</p>
                    <p>+57 (4) 403-1770</p>
                </div>
                <div class="col-md-3">
                    <h3>Stay Tuned</h3>
                    <div class="sep-grey-50"></div>
                    <ul class="ul-social">
                        <li class="ul-social-facebook">
                            <a href="https://www.facebook.com/SantexGroup" target="_blank">Facebook</a>
                        </li>
                        <li class="ul-social-twitter">
                            <a href="https://twitter.com/SantexGroup" target="_blank">Twitter</a>
                        </li>
                        <li class="ul-social-instagram">
                            <a href="https://www.instagram.com/thesantexteam/" target="_blank">Instagram</a>
                        </li>
                        <li class="ul-social-linkedin">
                            <a href="https://ar.linkedin.com/company/santexgroup" target="_blank">LinkedIn</a>
                        </li>
                        <li class="ul-social-youtube">
                            <a href="http://www.youtube.com/TheSantexChannel" target="_blank">Youtube</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>
 
 
<?php get_footer(); ?>