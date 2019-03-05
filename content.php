<div>
    <?php if(has_children() OR $post->post_parent > 0){ ?>
    
        <span>
            <a href="<?php echo get_permalink(get_top_ancestor_id())?>">
                <?php echo get_the_title(get_top_ancestor_id()); ?>
            </a>
        </span>
        <?php
        
        $args = array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => ''
            );
        
        wp_list_pages($args);
        ?>
    <?php } ?>
    
    <a href="<?php echo get_permalink(); ?>"><h1><?php  the_title(); ?></h1></a>
    
    <p><?php the_content(); ?></p>
</div>