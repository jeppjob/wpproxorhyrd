<?php get_header(); ?>

<div>
<?php 

while(have_posts()){
    the_post();
}
?>

<?php the_content(); ?>
</div>
<?php get_footer(); ?>