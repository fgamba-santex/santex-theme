<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package santex
 */

?>

 <div id="primary" class="content-area">
        <main id="profile-main" class="profile">
            
            <div class="container-fluid intro-container">
	            <div id="profile-intro" class="section-container" >
	                <div class="row">
	                    <h1 class="profile-title">
	                    
	                    	<?php echo do_shortcode ('[pods]{@santex_profile_title}[/pods]');?>


	                    </h1>
	                   
	                    <div class="profile-description">

	                        <?php echo do_shortcode ('[pods]{@santex_profile_description}[/pods]');?>


	                    </div>


	                    <a class="schedule-btn button" href="#profile-contact-form" >Schedule a Call</a>
	                </div>

	            </div>
	        </div>
            
            <div class="container-fluid skills-container">
            		<div class="arrow-down">
	            	</div>
	            <div id="profile-skills" class="section-container" >

	                <div class="row">
	                    <h2 class="skill-title profile-title">
	                        Skills
	                    </h2>
	                   
	                    <p class="container-sub-title profile-skills-intro">
								Things I've picked up over the years
	                    </p>
                        <div class="skills-wrapper">
                            <?php echo do_shortcode ('[pods]{@santex_profile_skills}[/pods]');?>


		                   <!-- <div class="col-md-4  col-sm-12 col-xs-12 service skill-category ">
		                    	<h3 class="skill-category-title">
		                    		Databases & Application Servers
		                    	</h3>
		                    	<ul class="skill-list">
		                    		<li>Oracle</li>
		                    		<li>SQL</li>
		                    		<li>MySQL</li>
		                    		<li>PL/SQL</li>
		                    		<li>Apache Tomcat</li>
		                    		<li>JBoss</li>
		                    	</ul>
		                    </div>
		                    <div class="col-md-4  col-sm-12 col-xs-12 skill-category ">
		                    	<h3 class="skill-category-title">
		                    		Apis & IDE's
		                    	</h3>
		                    	<ul class="skill-list">
		                    		<li>Java Remote Method Invocation</li>
		                    		<li>Eclipse</li>
		                    		<li>Enterprise Java Beans</li>
		                    		<li>Xcode</li>
		                    	</ul>
		                    </div>
		                     <div class="col-md-4  col-sm-12 col-xs-12 skill-category ">
		                    	<h3 class="skill-category-title">
		                    		Other Tools
		                    	</h3>
		                    	<ul class="skill-list">
		                    		<li>Tools REST JUnit</li>
		                    		<li>JSP</li>
		                    		<li>Swing</li>
		                    		<li>ActiveX Data Objects</li>
		                    	</ul>
		                    </div>
		                    <div class="col-md-4  col-sm-12 col-xs-12 skill-category ">
		                    	<h3 class="skill-category-title">
		                    		Other Tools
		                    	</h3>
		                    	<ul class="skill-list">
		                    		<li>Tools REST JUnit</li>
		                    		<li>JSP</li>
		                    		<li>Swing</li>
		                    		<li>ActiveX Data Objects</li>
		                    	</ul>
		                    </div>
		                       <div class="col-md-4  col-sm-12 col-xs-12 skill-category ">
		                    	<h3 class="skill-category-title">
		                    		Other Tools
		                    	</h3>
		                    	<ul class="skill-list">
		                    		<li>Tools REST JUnit</li>
		                    		<li>JSP</li>
		                    		<li>Swing</li>
		                    		<li>ActiveX Data Objects</li>
		                    	</ul>-->
		                    </div>
	                	</div>
	                </div>

	            </div>
           </div>
            
            <div class="container-fluid experience-container">
	            <div id="profile-experience" class="section-container" >
	                <div class="row">
	                    <h2 class="experience-title profile-title">
	                        Experience
	                    </h2>

		                <h3 class="expereience-sub-title">
		       
		                </h3>

		                <div class="col-md-12 col-sm-12 col-xs-12 experience-container">
		                     

		                	   <?php echo do_shortcode ('[pods]{@santex_profile_experience}[/pods]');?>

		                     <!--<p>Santex (2010 - Present) <br>
		                        The Project: Engage Platform
		                     </p>

							<ul class="experience-list">
								<li>Works as a backend developer.</li>
								<li>Focus on the development and testing of the micro services.</li>
								<li>Worked on the bug fixing.</li>
								<li>Technologies: Java8, Lagom Framework, Play Framework</li>
							</ul>

		                    <p>The Project: Ilumno - Integrations </p>

							<ul class="experience-list">
								<li>Integrated the platforms of Ilumno’s client universities with Ilumno’s suite of web services.</li>

								<li>Configured web services and SOA architecture.</li>

								<li>Developed middleware and analyzes connectivity and security issues.</li>

								<li>Created custom solutions to ensure that Ilumno’s services run smoothly on client software.</li>

								<li>Technologies: WSO2 tool suite, Java, SOA, JavaScript</li>
							</ul>-->

		                </div>
	                   
	                </div>

	            </div>
       		</div>

            <div class="container-fluid education-container">
	            <div id="profile-education" class="section-container " >
	                <div class="row">
	                    <h2 class="education-title profile-title">
		                     Education
		                </h2>

		                   <?php echo do_shortcode ('[pods]{@santex_profile_education}[/pods]');?>

	                	<!--<div class="education-item col-sm">
		                 

			                <h3 class="experience-sub-title">
			                	Software Engineering
			                </h3>

			                <p class="education-description">
				                Universidad Tecnológica Nacional - Córdoba, Argentina (2000-2004)<br>
		                     	Ingeniería en Sistemas (equivalent to 5-year degree in Software Engineering).
			                </p>

		            	</div>

		            	<div class="education-item col-sm">
		                   
			                <h3 class="expereience-sub-title">
			                	Software Engineering
			                </h3>

			                <p class="education-description">
				                Universidad Tecnológica Nacional - Córdoba, Argentina (2000-2004)<br>
		                     	Ingeniería en Sistemas (equivalent to 5-year degree in Software Engineering).
			                </p>

		            	</div>  -->            
	                   
	                </div>

	            </div>
	        </div>
            <div class="container-fluid language-container">
	            <div id="profile-language" class="section-container " >
		                <div class="row">
		                    <h2 class="profile-language-title profile-title">
			                    Languages
			                </h2>

			                     

			                <div class="language-item-wrapper">
                                         <?php echo do_shortcode ('[pods]{@santex_profile_languaje}[/pods]');?>
			                	<!--<div class="language-item col-md-6 col-sm-12 col-xs-12">
				                 
					                <h3 class="language-sub-title">
					                	Spanish
					                </h3>

					                <p class="language-level">
						               Native
					                </p>

				            	</div>

				                <div class="language-item col-md-6 col-sm-12 col-xs-12">
				                 
					                <h3 class="language-sub-title">
					                	English
					                </h3>

					                <p class="language-level">
						                Intermediate - Advance
					                </p>

				            	</div> -->	
				            </div>	                   
		                </div>

	            </div>
			</div>
			<?php
							   $courses_and_cert = get_post_meta($id,'santex_profile_courses_and_certificacions',true);
							   if($courses_and_cert){ ?>
            <div class="container-fluid courses-container">
	             <div id="profile-courses" class="section-container" >
		                <div class="row">
							
							
		                    <h2 class="profile-courses-title profile-title">
			                    Courses and Certifications
							</h2>
                            <div class="courses-wrapper">
                            	  <?php echo do_shortcode ('[pods]{@santex_profile_courses_and_certificacions}[/pods]');?> 
			                	<!--<div class="col-md-6 col-sm-12 col-xs-12 courses-item">
				                 
					                <h3 class="courses-subtitle">
					                	Introduction to Swift Programing
					                </h3>

					                <p class="courses-extra">
						               University of Toronto
					                </p>

				            	</div>
-->
			                </div>
		                   
		                </div>

	            </div>
			</div> 
			<?php } ?>
			
			<div class="container-fluid profile-tags-container">
	             <div id="profile-tags" class="section-container" >
		                <div class="row">
						<h2 class="profile-title"> Technologies </h2>
						<?php

							echo('<ul>');			
							$terms = get_the_terms( $post->ID, 'santex_technology' ); ;
								foreach($terms as $term) {
									$tag_link = get_tag_link($term->term_id);
									echo('<li><a href="'.$tag_link.'" target=blank>'.$term->name.'</a></li>');
								}
									
								echo('</ul>');   

						?>
		                </div>

	            </div>
            </div>

			<div class="container-fluid contact-container">
	            <div id="profile-contact-form" class="section-container" >
		                <div class="row">
		                    <h2 class="profile-contact-title profile-title">
			                    Contact us Today
			                </h2>

			                <p> We'll get back to you within 24 hours </p>

	                        <div>
	                        	<?php echo do_shortcode("[contact-form-7 id='122771' title='Profile Contact Form']"); ?>
	                        </div>
		                   
		                </div>

	            </div>
       		</div>








        </main><!-- #main -->
    </div><!-- #primary -->
    <style>



    </style>

