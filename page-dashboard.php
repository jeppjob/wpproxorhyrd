<?php get_header(); ?>


<?php 

while(have_posts()){
    the_post();
}
?>

<div class="my-5">
<form action="<?php echo site_url('/thank-you');?>" method="post">
<?php the_content(); ?>
	</form>
</div>
<?php get_footer(); ?>