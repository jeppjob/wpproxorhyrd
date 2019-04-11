<?php
remove_action('wp_head', 'wp_generator');
// Initialize heme Support
function proxor_init(){
	    add_theme_support('title');

    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',
    array('comment-list','comment-form','search-form')
    );
}

add_action('after_theme_setup', 'proxor_init');

function proxor_setup(){
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL,microtime());
    wp_enqueue_style('fonts', get_theme_file_uri(). '/fonts', NULL, microtime());
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array('jquery'));
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'proxor_setup');

function proxor_menu(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'footer-menu' => __('Footer Menu')
			));
}
add_action('init', 'proxor_menu');

function proxor_customizer($wp_customize){
	$wp_customize->add_section('frontpage_section_1',array(
		'title' => __('Front Page Section 1','proxor'),
		'description' => sprintf(__('Settings for Jumbotron and What we do section', 'proxor')),
		'priority' => 120
			));
	// Jumbotron Heading
	$wp_customize->add_setting('jumbotron_heading',array(
	'default' => _x('Your complete developer talent management platform.','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('jumbotron_heading',array(
	'label' => __('Jumbotron Heading Text', 'proxor'),
	'section' => 'frontpage_section_1'
	));
	
	// Jumbotron Subheading
	$wp_customize->add_setting('jumbotron_subheading',array(
	'default' => _x('Our end-to-end solution helps you hire, manage and retain 
top software engineering talent.','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('jumbotron_subheading',array(
	'label' => __('Jumbotron Subheading Text', 'proxor'),
	'section' => 'frontpage_section_1'
	));
	
	//What We Do Heading
	$wp_customize->add_setting('section_1_heading',array(
	'default' => _x('What We Do','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_1_heading',array(
	'label' => __('Section 1 Heading Text', 'proxor'),
	'section' => 'frontpage_section_1'
	));
	
	//What We Do Subheading
	$wp_customize->add_setting('section_1_subheading',array(
	'default' => _x("Proxor was developed from decades of leading assessment and education research backed by
the world's top ranked computer science universities and academics.
Proxor helps you:",'proxor'),
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_1_subheading',array(
		'label' => __('Section 1 Subheading Text','proxor'),
		'section' => 'frontpage_section_1'
	));
	
	//What We Do Image 1
	$wp_customize->add_setting('section_1_image_1',array(
		'default' => get_bloginfo('template_directory').'/images/hire-correct-engineers.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_1_image_1' ,array(
	'label' => __('Section 1 Image 1','proxor'),
		'section' => 'frontpage_section_1'
	)));
	
	//What We Do Description 1
	$wp_customize->add_setting('section_1_description_1',array(
	'default' => _x('Hire the correct engineers for the job. Proxor developers in work-driven scenarios with a real code base to get you an accurate asssessment of a developer&#39s skills and capabilities on the job.','proxor'),
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_1_description_1',array(
		'label' => __('Section 1 Description 1','proxor'),
		'section' => 'frontpage_section_1'
	));
	
	//What We Do Image 2
	$wp_customize->add_setting('section_1_image_2',array(
		'default' => get_bloginfo('template_directory').'/images/talent-and-resources.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_1_image_2' ,array(
	'label' => __('Section 1 Image 2','proxor'),
		'section' => 'frontpage_section_1'
	)));
	
	//What We Do Description 2
	$wp_customize->add_setting('section_1_description_2',array(
	'default' => _x("Manage your talent and resources effectively. Proxor accurately details a programmer's skills, strengths and weaknesses, giving employers and talent a window into skills, weaknesses and strengths.",'proxor'),
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_1_description_2',array(
		'label' => __('Section 1 Description 2','proxor'),
		'section' => 'frontpage_section_1'
	));
	
	//What We Do Image 3
	$wp_customize->add_setting('section_1_image_3',array(
		'default' =>get_bloginfo('template_directory').'/images/upskill-and-develop-talent.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_1_image_3' ,array(
	'label' => __('Section 1 Image 3','proxor'),
		'section' => 'frontpage_section_1'
	)));
	
	//What We Do Description 3
	$wp_customize->add_setting('section_1_description_3',array(
	'default' => _x("Upskill and develop talent efficiently. Proxor provides targeted training based on our complete developer assessment solution to help you upskill talent in key areas in the shortest amount of time.",'proxor'),
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_1_description_3',array(
		'label' => __('Section 1 Description 3','proxor'),
		'section' => 'frontpage_section_1'
	));
	
	
	
	// FRONT PAGE SECTION 2
	$wp_customize->add_section('frontpage_section_2',array(
		'title' => __('Front Page Section 2','proxor'),
		'description' => sprintf(__('Settings for Benefits section', 'proxor')),
			));
		//Section 2 Heading
	$wp_customize->add_setting('section_2_heading',array(
	'default' => _x('How institutions can benefit from working with us','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_heading',array(
	'label' => __('Section 2 Heading Text', 'proxor'),
	'section' => 'frontpage_section_2'
	));
	
	
	//Section 2 Image 1
	$wp_customize->add_setting('section_2_image_1',array(
		'default' =>get_bloginfo('template_directory').'/images/business.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_image_1' ,array(
	'label' => __('Section 2 Image 1','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	//Section 2 Title 1
	$wp_customize->add_setting('section_2_title_1',array(
	'default' => _x('Businesses','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_title_1',array(
	'label' => __('Section 2 Title 1', 'proxor'),
	'section' => 'frontpage_section_2'
	));
	
	//Section 2 Description 1
	$wp_customize->add_setting('section_2_description_1',array(
	'default' => _x('- Optimize your resource deployment.<br>
- Provide software developer assessment, development and training to your engineers globally.<br>
- Maximize your project profitability and overall return on investment.<br>
- Quantify a candidate skill level to reduce recruitment cycle times.','proxor'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_description_1',array(
	'label' => __('Section 2 Title 1', 'proxor'),
	'section' => 'frontpage_section_2',
			'type'    => 'textarea'
	));
	
	
	//Section 2 Image 2
	$wp_customize->add_setting('section_2_image_2',array(
		'default' =>get_bloginfo('template_directory').'/images/software-developers.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_image_2' ,array(
	'label' => __('Section 2 Image 2','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	//Section 2 Title 2
	$wp_customize->add_setting('section_2_title_2',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_title_2',array(
	'label' => __('Section 2 Title 2', 'proxor'),
	'section' => 'frontpage_section_2'
	));
	
	//Section 2 Description 2
	$wp_customize->add_setting('section_2_description_2',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_description_2',array(
	'label' => __('Section 2 Title 2', 'proxor'),
	'section' => 'frontpage_section_2',
			'type'    => 'textarea'
	));
	
	
	//Section 2 Image 3
	$wp_customize->add_setting('section_2_image_3',array(
		'default' =>get_bloginfo('template_directory').'/images/government.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_image_3' ,array(
	'label' => __('Section 2 Image 3','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	//Section 2 Title 3
	$wp_customize->add_setting('section_2_title_3',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_title_3',array(
	'label' => __('Section 2 Title 3', 'proxor'),
	'section' => 'frontpage_section_2'
	));
	
	//Section 2 Description 3
	$wp_customize->add_setting('section_2_description_3',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_description_3',array(
	'label' => __('Section 2 Title 3', 'proxor'),
	'section' => 'frontpage_section_2',
			'type'    => 'textarea'
	));
	
	
	//Section 2 Image 4
	$wp_customize->add_setting('section_2_image_4',array(
		'default' =>get_bloginfo('template_directory').'/images/educational-institutions.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_image_4' ,array(
	'label' => __('Section 2 Image 4','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	//Section 2 Title 4
	$wp_customize->add_setting('section_2_title_4',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_title_4',array(
	'label' => __('Section 2 Title 4', 'proxor'),
	'section' => 'frontpage_section_2'
	));
	
	//Section 2 Description 4
	$wp_customize->add_setting('section_2_description_4',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_2_description_4',array(
	'label' => __('Section 2 Title 4', 'proxor'),
	'section' => 'frontpage_section_2',
			'type'    => 'textarea'
	));
	
	//Section 2 Partners
	$wp_customize->add_setting('section_2_partners_heading',array(
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('section_2_partners_heading',array(
	'label'=> __('Section 2 Partners Heading'),
	'section' =>'frontpage_section_2'
	));
	
	// Section 2 Partners Images
	$wp_customize->add_setting('section_2_partners_image_1',array(
		'default' =>get_bloginfo('template_directory').'/images/ajou-university-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_1' ,array(
	'label' => __('Parnters Image 1','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_2',array(
		'default' =>get_bloginfo('template_directory').'/images/Accenture-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_2' ,array(
	'label' => __('Parnters Image 2','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_3',array(
		'default' =>get_bloginfo('template_directory').'/images/sitf-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_3' ,array(
	'label' => __('Parnters Image 3','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_4',array(
		'default' =>get_bloginfo('template_directory').'/images/ey-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_4' ,array(
	'label' => __('Parnters Image 4','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_5',array(
		'default' =>get_bloginfo('template_directory').'/images/soft-bank-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_5' ,array(
	'label' => __('Parnters Image 5','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_6',array(
		'default' =>get_bloginfo('template_directory').'/images/ieee-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_6' ,array(
	'label' => __('Parnters Image 6','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	
	$wp_customize->add_setting('section_2_partners_image_7',array(
		'default' =>get_bloginfo('template_directory').'/images/smu-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_7' ,array(
	'label' => __('Parnters Image 7','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	$wp_customize->add_setting('section_2_partners_image_8',array(
		'default' =>get_bloginfo('template_directory').'/images/esi-center-logo.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_2_partners_image_8' ,array(
	'label' => __('Parnters Image 8','proxor'),
		'section' => 'frontpage_section_2'
	)));
	
	
	//Front Page Section 3
	$wp_customize->add_section('frontpage_section_3',array(
		'title' => __('Front Page Section 3','proxor'),
		'description' => sprintf(__('Settings for Partners', 'proxor')),
			));
	$wp_customize->add_setting('section_3_heading',array(
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('section_3_heading',array(
	'label'=> __('Section 3 Heading'),
	'section' =>'frontpage_section_3'
	));
	
	// Card 1
	$wp_customize->add_setting('section_3_card_image_1',array(
		'default' =>get_bloginfo('template_directory').'/images/sap-review.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_3_card_image_1' ,array(
	'label' => __('Card Image 1','proxor'),
		'section' => 'frontpage_section_3'
	)));
	
	$wp_customize->add_setting('section_3_card_description_1',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_3_card_description_1',array(
	'label' => __('Card Description 1', 'proxor'),
	'section' => 'frontpage_section_3',
			'type'    => 'textarea'
	));
	
	// Card 2
	$wp_customize->add_setting('section_3_card_image_2',array(
		'default' =>get_bloginfo('template_directory').'/images/alibaba-review.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_3_card_image_2' ,array(
	'label' => __('Card Image 2','proxor'),
		'section' => 'frontpage_section_3'
	)));
	
	$wp_customize->add_setting('section_3_card_description_2',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_3_card_description_2',array(
	'label' => __('Card Description 2', 'proxor'),
	'section' => 'frontpage_section_3',
			'type'    => 'textarea'
	));
	
	// Card 3
	$wp_customize->add_setting('section_3_card_image_3',array(
		'default' =>get_bloginfo('template_directory').'/images/smu-review.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_3_card_image_3' ,array(
	'label' => __('Card Image 3','proxor'),
		'section' => 'frontpage_section_3'
	)));
	
	$wp_customize->add_setting('section_3_card_description_3',array(
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('section_3_card_description_3',array(
	'label' => __('Card Description 3', 'proxor'),
	'section' => 'frontpage_section_3',
			'type'    => 'textarea'
	));
	
	
	// How it works
	$wp_customize->add_setting('section_3_heading_2',array(
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('section_3_heading_2',array(
	'label'=> __('Section 3 Heading 2'),
	'section' =>'frontpage_section_3'
	));
	
	$wp_customize->add_setting('section_3_carousel_image_1',array(
		'default' =>get_bloginfo('template_directory').'/images/Carousel 1.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_3_carousel_image_1' ,array(
	'label' => __('Carousel Image 1','proxor'),
		'section' => 'frontpage_section_3'
	)));
	
	$wp_customize->add_setting('section_3_carousel_image_2',array(
		'default' =>get_bloginfo('template_directory').'/images/Carousel 2.png', 'proxor',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_3_carousel_image_2' ,array(
	'label' => __('Carousel Image 2','proxor'),
		'section' => 'frontpage_section_3'
	)));
	
	
	//Footer Display Links
	$wp_customize->add_section('footer_display_section',array(
	'title'=> __('Footer Display'),
	'description' => sprintf(__('Display Footer', 'proxor')),
	
	));
   	$wp_customize->add_setting('footer_display',array(
	'default' => __('hidden'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_display',array(
	'label'=> __("Remove 'hidden' text to show footer links"),
	'section' =>'footer_display_section'
	));
	
	// Footer Links
	
	$wp_customize->add_setting('footer_text_1',array(
	'default' => __('About Us'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_text_1',array(
	'label'=> __("Footer Text 1"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_link_1',array(
	'default' => __('#'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_link_1',array(
	'label'=> __("Footer Link 1"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_text_2',array(
	'default' => __('Contact Us'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_text_2',array(
	'label'=> __("Footer text 2"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_link_2',array(
	'default' => __('#'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_link_2',array(
	'label'=> __("Footer Link 2"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_text_3',array(
	'default' => __('Privacy Statement'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_text_3',array(
	'label'=> __("Footer Text 3"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_link_3',array(
	'default' => __('#'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_link_3',array(
	'label'=> __("Footer Link 3"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_text_4',array(
	'default' => __('Terms and Conditions'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_text_4',array(
	'label'=> __("Footer Text 4"),
	'section' =>'footer_display_section'
	));
	
	$wp_customize->add_setting('footer_link_4',array(
	'default' => __('#'),
	'type' => 'theme_mod'
	));
	$wp_customize->add_control('footer_link_4',array(
	'label'=> __("Footer Link 4"),
	'section' =>'footer_display_section'
	));
	
	/*$wp_customize->add_section('p_admin_email',array(
	'title' => 'Admin Email',
	'description' => 'Admin Email for Product Inquiries'
	));
	
	$wp_customize->add_setting('product_admin_email',array(
	'default' =>get_bloginfo('admin_email'),
	'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('product_admin_email',array(
	'label' => __('Email Address'),
	'section' => 'p_admin_email'
	));*/
	}
add_action('customize_register','proxor_customizer');
?>

