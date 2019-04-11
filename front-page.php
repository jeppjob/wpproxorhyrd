<?php get_header(); ?>
    <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center my-5">
            <div class="container">
                <h1><?php echo get_theme_mod('jumbotron_heading','Your complete developer talent management platform.');?></h1>
                <p class="mb-5"><?php echo get_theme_mod('jumbotron_subheading','Our end-to-end solution helps you hire, manage and retain top software engineering talent.'); ?>
                    </p>
                <a class="btn btn-primary btn-lg" href="<?php echo site_url('/sign-up');?>" role="button">Create an Account</a>
            </div>
        </div>
        <!-- What We Do section -->
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2><?php echo get_theme_mod('section_1_heading','What We Do');?></h2>
                    <p class="my-3"><?php echo get_theme_mod('section_1_subheading','Proxor was developed from decades of leading assessment and education research backed by<br> the worlds top ranked computer science universities and academics.<br>Proxor helps you:</p>'); ?>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_theme_mod('section_1_image_1',  get_template_directory_uri().'/images/hire-correct-engineers.png');?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo get_theme_mod('section_1_description_1','Hire the correct engineers for the job. Proxor developers in work-driven scenarios with a real code base to get you an accurate asssessment of a developer&#39s skills and capabilities on the job.'); ?> </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_theme_mod('section_1_image_2',get_template_directory_uri().'/images/talent-and-resources.png');?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo get_theme_mod('section_1_description_2',"'Manage your talent and resources
                                effectively. Proxor accurately details
                                a programmer's skills, strengths and
                                weaknesses, giving employers and
                                talent a window into skills,
                                weaknesses and strengths.'");?></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_theme_mod('section_1_image_3', get_template_directory_uri().'/images/upskill-and-develop-talent.png');?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo get_theme_mod('section_1_description_3','Upskill and develop talent
                                efficiently. Proxor provides targeted
                                training based on our complete
                                developer assessment solution to
                                help you upskill talent in key areas
                                in the shortest amount of time.');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section -->
    <div class="bg-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-5 py-5">
                    <h2 class="text-center"><?php echo get_theme_mod('section_2_heading','How institutions can benefit from working with us');?></h2>
                </div>
            </div>
        </div>
        <div class="container benefits">
            <!-- first row -->
            <div class="row mb-5">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo get_theme_mod('section_2_image_1',get_template_directory_uri().'/images/business.png')?>" width="100" class="">
                </div>
                <div class="col-md-8">
                    <p class="lead"><?php echo get_theme_mod('section_2_title_1','Businesses');?></p>
					<p style="font-weight:normal;">
						<?php echo get_theme_mod('section_2_description_1','- Optimize your resource deployment.<br>
- Provide software developer assessment, development and training to your engineers globally.<br>
- Maximize your project profitability and overall return on investment.<br>
- Quantify a candidate skill level to reduce recruitment cycle times.'); ?>
					</p>
                </div>
            </div>
            <!-- second row -->
            <div class="row mb-5">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo get_template_directory_uri().'/images/software-developers.png'?>" width="100">
                </div>
                <div class="col-md-8">
                    <p class="lead"><?php echo get_theme_mod('section_2_title_2','Software Developers');?></p>
                   <p style="font-weight: normal;">
					   <?php echo get_theme_mod('section_2_description_2','- Certify and identify your capabilities, strengths and weaknesses to get you job ready.<br>
- Benchmark your skills against international top-tier universities and standards like IEEE to see where you stand.<br>
- Improves your reputation in the job market locally and globally.');?>
					</p>
                </div>
            </div>
            <!-- third row -->
            <div class="row mb-5">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo get_theme_mod('section_2_image_3',get_template_directory_uri().'/images/government.png')?>" width="100" class="">
                </div>
                <div class="col-md-8">
                    <p class="lead"><?php echo get_theme_mod('section_2_title_3','Governments');?></p>
                    <p style="font-weight: normal;">
						<?php echo get_theme_mod('section_2_description_3','- Helps attract international demand and correctly identifies skilled talent.<br>
- Facilitates international investments in your IT sector.');?>
					</p>
                </div>
            </div>
            <!-- fourth row -->
            <div class="row mb-5">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo get_theme_mod('section_2_image_4',get_template_directory_uri().'/images/educational-institutions.png');?>" width="100" class="">
                </div>
                <div class="col-md-8">
                    <p class="lead"><?php echo get_theme_mod('section_2_title_4','Educational institutions');?></p>
                    <p style="font-weight:normal;">
						<?php echo get_theme_mod('section_2_description_4',"- Improves your educational institution's ranking and reputation.<br>
- Strengthens your student body's employability, and potential compensation.<br>
- Provides a standard to help you grade and assess across your entire engineering program.");?>
					</p>
				</div>
            </div>
            <div class="row">
                <div class="col-lg-12 my-5 text-center">
                    <a class="second-cta btn btn-primary btn-lg" href="<?php echo site_url('/sign-up');?>" role="button">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Some Partners Section -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="my-5 grey"><?php echo get_theme_mod('section_4_partners_heading','Some partners that work with us');?></h2>
                <div class="card-deck">
                    <div class="card align-self-center">
                            <img src="<?php echo get_theme_mod('section_2_partners_image_1',get_template_directory_uri().'/images/ajou-university-logo.png');?>" class="card-img-top"  alt="...">
                    </div>
                    <div class="card align-self-center">
                            <img src="<?php echo get_theme_mod('section_2_partners_image_2',get_template_directory_uri().'/images/Accenture-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_3',get_template_directory_uri().'/images/sitf-logo.png');?>" class="card-img-top mx-auto d-block" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_4',get_template_directory_uri().'/images/ey-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_5',get_template_directory_uri().'/images/soft-bank-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_6',get_template_directory_uri().'/images/ieee-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_7',get_template_directory_uri().'/images/smu-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card align-self-center">
                        <img src="<?php echo get_theme_mod('section_2_partners_image_8',get_template_directory_uri().'/images/esi-center-logo.png');?>" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners Testimonials -->
    <div class="bg-left">
        <div class="container">
            <div class="row testimonials">
                <div class="col">
                    <h2 class="text-center my-5"><?php echo get_theme_mod('section_3_heading','What our partners are saying');?></h2>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-testimonials">
                                <img src="<?php echo get_theme_mod('section_3_card_image_1', get_template_directory_uri().'/images/sap-review.png');?>" class="card-img-top " alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="border-top: 6px solid #df2128;padding-top: 1em;"><?php echo get_theme_mod('section_3_card_description_1',"The Proxor exam provides feedback on
                                    real development experience: the ability
                                    to read, understand and enhance the
                                    code of others, ability to debug and in
                                    general, real project development
                                    experience close to the job - Boris
                                    Angelov, SAP Labs Bulgaria.");?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-testimonials">
                                <img src="<?php echo get_theme_mod('section_3_card_image_2',get_template_directory_uri().'/images/alibaba-review.png');?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="border-top: 6px solid #df2128;padding-top: 1em;"><?php echo get_theme_mod('section_3_card_description_2',"Proxor is of great value to new
                                    graduates and developers in their early
                                    career, while of reference value to
                                    senior engineers and software
                                    architects. In conlusion, this test is
                                    perfect for large scale hiring. It can help
                                    employers save a great deal of cost. The
                                    larger scale the hiring is, the more
                                    valuable the test will be. - Zhang
                                    Qun-hui, Director of Infrastructure
                                    Services, Alibaba.");?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-testimonials">
                                <img src="<?php echo get_theme_mod('section_3_card_image_3',get_template_directory_uri().'/images/smu-review.png');?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="border-top: 6px solid #df2128;padding-top: 1em;"><?php echo get_theme_mod('section_3_card_description_3',"Proxor provides our students with a
                                    good idea of where their practical
                                    programming skills actually stand in the
                                    industry and identifies specific areas of
                                    strengths and weaknesses for follow-up
                                    corrective action. - Lee Teow Leong &
                                    Mok Heng Ngee, School of Information
                                    Systems, Singapore Management
                                    University (SMU).");?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col">
                    <h2 class="text-center my-5"><?php echo get_theme_mod('section_3_heading_2','How it works');?></h2>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_theme_mod('section_3_carousel_image_1',get_template_directory_uri().'/images/Carousel 1.png');?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_theme_mod('section_3_carousel_image_2',get_template_directory_uri().'/images/Carousel 2.png');?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form -->
	
    <div class="container pb-5">
        <div class="row">
            <div class="col">
                <h2 class="my-5 text-center">Want to learn more? Get in Touch</h2>
                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
   
    <?php get_footer(); ?>
    