<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <style>
@font-face{
    font-family: "Din Black";
    src: url("<?php echo get_template_directory_uri(). '/Fonts/DIN-BlackAlternate.ttf'?>");
    font-family: "Din Medium";
    src: url("<?php echo get_template_directory_uri(). '/Fonts/DIN-Medium.ttf'?>");
    font-family: "Adobe Ming";
    src: url("<?php echo get_template_directory_uri(). '/Fonts/AdobeMingStd-Light.otf'?>");
}
.bg-right{
    background: url("<?php echo get_template_directory_uri(). '/images/orange-right.png'?>");
    background-repeat: no-repeat;
    background-position: top top;
    background-size: cover;
    }
    .bg-left{
    background: url("<?php echo get_template_directory_uri(). '/images/orange-left.png'?>");
    position: relative;
    background-repeat: no-repeat;
    background-position: top top;
    background-size: cover;
    z-index: 1;
    }
</style>
	<title><?php echo get_the_title( $ID ); ?></title>
</head>
<body>
<div class="bg-right">
<nav class="navbar navbar-expand-lg mx-lg-5">
        <a class="navbar-brand mx-auto" href="<?php echo home_url();?>">
            <img src="<?php echo get_template_directory_uri().'/images/proxor-hyrd-logo.png'?>" width="150" alt="logo">
        </a>
        <a class="navbar-brand d-none d-lg-block d-lg-none ml-2" href="#">
            <img src="<?php echo get_template_directory_uri().'/images/carnegie-mellon-university.png'?>" width="200" alt="carnegie mellon university">
        </a>
        <ul class="menu nav navbar-nav ml-auto w-100 d-flex justify-content-end">
			<?php if(!is_user_logged_in()) {?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/sign-up');?>">Create an account</a>
            </li>
     
<li class="nav-item">
                
                <a class="nav-link borderorange rounded px-4" href="<?php echo site_url('/log-in');?>">Log in</a>
                </li>
            <?php } else {?>
			<li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/dashboard');?>">Dashboard</a>
			<li class="nav-item">
                <a class="nav-link borderorange rounded px-4" href="<?php echo site_url('/log-out');?>">Log Out</a>
                </li>
			
			<?php } ?>
        </ul>
    </nav>