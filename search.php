<?php 
//header
get_header();

//loop thru the posts
if (have_posts()): while(have_posts()): the_post(); ?>
    <h2>Results for: <?php the_search_query(); ?></h2>
    
    <?php get_template_part('content'); ?>
    
    <?php endwhile; else: ?>
    
    <p>No Posts found :(</p>
    
<?php endif; 
//render footer
get_footer();
?>