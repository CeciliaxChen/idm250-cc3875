<?php get_header(); ?>

<!-- create a hero page --> 

<h1><?php echo get_the_title(); ?></h1> 
<?php echo get_the_post_thumbnail_url(); ?> 


<?php get_template_part('components/content'); ?> 



<?php get_footer(); ?> 