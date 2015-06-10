<?php
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts() {
    global $post;
    $tags = wp_get_post_tags( $post->ID );
    if($tags) {
        foreach( $tags as $tag ) {
            $tag_arr .= $tag->slug . ',';
        }
        $args = array(
            'tag' => $tag_arr,
            'numberposts' => 4, /* You can change this to show more */
            'post__not_in' => array($post->ID)
        );
        $related_posts = get_posts( $args );
        if($related_posts) {

        echo '<h5>Leggi anche...</h5>';
        echo '<div id="joints-related-posts">';
            foreach ( $related_posts as $post ) : setup_postdata( $post ); 
                  // miniatura?>

                <a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <div class="related_post">
                	<div>
	                    <figure><?php echo get_the_post_thumbnail($post_id, 'medium') ?></figure>
	                    <h6><?php the_title(); ?></h6>
                    </div>
                </a>
                </div>
            <?php endforeach; 
        		echo '</div>';
        	}
             
            }
    wp_reset_postdata();
   
}

joints_related_posts();
?>