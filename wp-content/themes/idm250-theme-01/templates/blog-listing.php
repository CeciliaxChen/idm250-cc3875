<?php
/* Template Name: Blog Listing */
/**
 * This template is used to display the blog listing page. Clicking on these cards will go to the post that uses single.php
 * This is an alternative to using the archive.php template.
 */
get_header(); 

// Set up the query
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // show all posts
    'orderby' => 'category', // order by category
);

$blog_query = new WP_Query( $args );

// Create a variable to store the current category
$current_category = '';
?>
<div>

<h1><?php echo get_the_title(); ?></h1> 
<div><?php echo get_the_excerpt(); ?></div>
<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>

</div>

<?php 




// Start the loop
if ( $blog_query->have_posts() ) {

    while ( $blog_query->have_posts() ) {
        $blog_query->the_post();

        // Get the current post's category
        $post_categories = get_the_category();

        // If this post has categories, loop through them
        if ( $post_categories ) {
            foreach ( $post_categories as $category ) {

                // If this is a new category, output the category title
                if ( $category->name !== $current_category ) {
                    $current_category = $category->name;
                    echo '<h2>' . $current_category . '</h2>';
                }

                // Output the post title and excerpt
                echo '<h3><a href="'. get_the_permalink() . '"> ' . get_the_title() . '</a></h3>';
                echo '<p>' . get_the_excerpt() . '</p>';

            }
        }

    }

} else {
    // No posts found
    echo '<p>No posts found</p>';
}

// Restore original post data
wp_reset_postdata();

?>

<?php get_footer(); ?>  