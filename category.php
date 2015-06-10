
<?php

/*
Template Name: Categorie
*/

get_header() ?>

	<div id="container">
	<div class="se-pre-con"></div>
<?php 
$myposts = query_posts( 'cat=6' ); 
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>


				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), array(400,400));
				$url = $thumb['0'];
				$num_comments = get_comments_number();
				?>
		<div class="articleGrid">
			<article>
				<?php if ( has_post_thumbnail() ) : ?>
				<figure>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"> 
					<img src="<?php echo $url ?>" alt="Immagine di <?php the_title() ?>">
					</a>
				</figure>
				<?php endif; ?>
				<span class="commenti"><b><?php echo $num_comments ?></b></span>
				<div class="didascalia">

				<?php

				
	foreach((get_the_category()) as $category) { 
    echo '<span class="' . $category->cat_ID . '">' . $category->cat_name . '</span>'; 
}


?>
	<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
	
				<h3><?php the_title() ?></h3>
				<p><?php the_excerpt() ?>
				</p>
				
				</div>
			</article>
		</div>

		<?php endforeach; ?>
	<div class="clearfix"></div> <!-- Clearfix -->
	<div class="pagelink"><?php wp_link_pages('pagelink=Page %'); ?></div>

<?php get_footer() ?>