<?php 
//header
get_header();

//loop thru the posts
if (have_posts()): while(have_posts()): the_post(); ?>

    <h1><?php  the_title(); ?></h1>
    
    <p><?php the_content(); ?></p>
    
    <?php endwhile; else: ?>
    
    <p>No Posts found :(</p>
    
<?php endif; 
//render footer
get_footer();
?>