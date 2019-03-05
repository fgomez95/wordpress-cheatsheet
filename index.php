<?php 
//header
get_header();

//loop thru the posts
if (have_posts()): while(have_posts()): the_post(); ?>
    
    <?php  get_template_part('content', get_post_format()); ?>
    
    <?php endwhile; else: ?>
    
    <p>No Posts found :(</p>
    
<?php endif; 
//render footer
get_footer();
?>