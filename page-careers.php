<?php
/*
Template Name: Page Careers
 */
?>

<?php get_header(); ?>

<div class="careers">
    <div class="container-fluid black page-featured left">
        <div class="featured-overlay"></div>
        <div class="container">
            <h1>Ready to unleash your passion and creativity?</h1>
            <h2>We are a tech-savvy company looking for highly skilled team players.</h2>
            <a class="btn" href="#about">About Santex</a> <a class="btn" href="https://santexdev.wpengine.com/careers/#openJobs" target="_blank">Open Positions</a>
        </div>
    </div>

    <div id="about" class="container-fluid careers-about p-50 black text-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3>About</h3>
                <img src="../wp-content/uploads/2020/05/santex-white.svg">
                <p>We are a US-based global software services company with more than 20 years of experience creating and executing innovative business solutions for leading brands across the world. Our goal is to transform reality by integrating skills and experience to empower organizations through technology.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container-fluid career-why">
        <div class="row p-50 ">

            <div class="col-md-6 career-why-image"></div>

            <div class="col-md-6">
                <div class="career-why-info">
                    <h3>Why choose Santex?</h3>
                    <p>Our corporate culture is what really makes us special: Santex is a people-focused organization and every decision we make is supported by our four core values: Courage, Passion, Trust and Participation.</p>
                    <p>While working at Santex, you will have the chance to develop your career goals in an inclusive environment that will always encourage you to bring out the best in yourself.</p>
                    <img src="../wp-content/uploads/2022/07/logo-purpose.svg">
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid career-holacratic">
        <div class="row p-50">
            <div class="col-md-6 order-md-2 career-holacratic-image"></div>
            <div class="col-md-6 order-md-1">
                <div class="career-holacratic-info">
                    <h3>Holacratic Structure</h3>
                    <p>We have an Holacratic Structure built around well specified roles and responsibilities, while maintaining an autonomy and flexibility that allows us to be more efficient and rapidly meet our client’s business demands.</p>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-6 text-center mb-20">
                            <img src="../wp-content/uploads/2022/07/courage.svg">
                            <p>Inspire each other</p>
                        </div>
                        <div class="col-6 text-center mb-20">
                            <img src="../wp-content/uploads/2022/07/passion.svg">
                            <p>Embrace change</p>
                        </div>
                        <div class="col-6 text-center mb-20">
                            <img src="../wp-content/uploads/2022/07/trust.svg">
                            <p>Build relationships based on respect</p>
                        </div>
                        <div class="col-6 text-center mb-20">
                            <img src="../wp-content/uploads/2022/07/participation.svg">
                            <p>Democratize decision-making</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid career-bcorp">
        <div class="row p-50 ">

            <div class="col-md-6 career-bcorp-image">
                <div class="container-overlay"></div>
                <img src="../wp-content/uploads/2022/07/careers-bcorp-logo.svg">
            </div>

            <div class="col-md-6">
                <div class="career-bcorp-info">
                    <h3>Start working with a Purpose</h3>
                    <h4>We are B-Corp</h4>
                    <p>Certified B Corporations are leaders in the global movement for an inclusive, equitable, and regenerative economy and that’s exactly our work philosophy at Santex. We believe that actions speak louder than words and it’s our responsibility to embrace the change we want to see in reality.</p>
                    <p>By joining our team, you will have the opportunity to develop your career in a carbon neutral company that has a strong sense of commitment to its community and the environment, and adheres to the highest standards of verified social performance, public transparency and legal responsibility.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid career-equality">
        <div class="row p-50 ">
            <div class="col-md-6 order-md-2 career-equality-image"></div>
            <div class="col-md-6 order-md-1">
                <div class="career-equality-info">
                    <h3>Equality is the only way to grow</h3>
                    <p>Santex is a safe space based on fairness and respect where each person’s career can be developed in the same way.</p>
                    <p>All decisions regarding our recruiting process will be made without any distinction, exclusion or preference based on race, color, gender, sexual orientation, disability, age, religion, political or union opinion, nationality or socioeconomic origin, or any other personal information provided by the candidates.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid career-process">
        <div class="row p-50 ">

            <div class="col-md-6 career-process-image"></div>

            <div class="col-md-6">
                <div class="career-process-info careers-recruitment-process-steps elementor-icon-list-items">
                    <h3>How does our recruitment process work?</h3>
                    <h4>Time- to- hire 21 days</h4>
                    <div class="space-30"></div>
                    <ul class="ul-circle">
                        <li>Initial Interview with HR</li>
                        <li>English Assessment Meeting</li>
                        <li>In-depth Technical Test & Seniority Validation</li>
                        <li>Meeting with our Leadership Team</li>
                        <li>Share your resume with our Client</li>
                        <li>Start the onboarding process</li>
                      
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div id="openJobs" class="container-fluid career-work p-50 text-center">
        <div class="row">
            <div class="col">

                <h3>Work at Santex</h3>
                <h5>Join large-scale projects and help us change the future of the industry.</h5>
                
                <?php echo do_shortcode('[gh_jobs_board status="open"]'); ?>

            </div>
        </div>
    </div>

    <div class="container-fluid black  career-share-cv  p-30">
        <div class="row container">
            <div class="col-md-4"></div>
            <div class="col-md-4 center">
                <h5 class="text-center">Nothing that matches your skill set?</h5>
                <a class="btn  btn-bordered-grey " href="https://santexgroup.com/jobs/?gh_jid=4200500002" target="_blank">SHARE YOUR CV</a>
                <p class="text-center">We’ll let you know if something comes up</p>

            </div>


        </div>

        <?php get_footer(); ?>