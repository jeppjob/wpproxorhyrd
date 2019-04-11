<?php get_header(); ?>

<?php
while(have_posts()){
    the_post();
}
?>
<div class="my-5">
<?php the_content(); ?>
	<?php 
$current_user = wp_get_current_user(); 
 $name = $current_user->user_firstname;
 $email = $current_user->user_email;
	
	$admin = get_option('admin_email');
	
$to = $admin;
$product =  $_POST['submit'];
$subject = "Production Redemption: $product" ;
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$message = " Name: $name\r\n Email: $email \r\n Product: $product\r\n " ;

$sent = wp_mail($to, $subject, $message, $headers, $attachments = array());
?>
</div>
<?php get_footer(); ?>