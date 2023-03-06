<?php get_header(); ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class();?>> 
<!-- posr class will post class and give you info -->
    <?php get_template_part('components/content'); ?> 
</article> 

<h2> Categories for this post </h2> 
<?php 
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    foreach ($terms as $term) {
    echo "<p>{$term->name}</p>";
}
}



?> 
<?php get_footer(); ?> 