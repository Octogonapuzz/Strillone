<?php get_header() ?>

<div id="singlePost">
<div class="se-pre-con"></div>
<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), array(400,400));
				$url = $thumb['0'];
				$num_comments = get_comments_number();
				?>
	<div class="colonnaArticoli">
		<figure class="evidenza"><img alt="In evidenza: <?php echo the_title() ?>" src="<?php echo $url ?>"></figure>
	<article><div class="data"><?php
				
	foreach((get_the_category()) as $category) { 
    echo '<span class="' . $category->cat_ID . '">' . $category->cat_name . '</span>'; 
}


?>
	<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
	
	</div>
	<div class="singleTitle"><h2><span><?php the_title() ?></span></h2></div>
	<div class="post">
	
	<?php the_content() ?></div>
	</article>
	

<div class="asideBlocks">
	<aside class="tagSide">
	<span class="tagSegnaposto">
		<span class="fa-stack fa-lg">
			  <i class="fa fa-circle fa-stack-2x"></i>
			  <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
		</span></span><?php 
		$t = $post->ID;
		tagz($t)

		?>
	<?php get_template_part('correlati') ?>
	</aside>
	<aside class="commentSide">
		<span class="commentSegnaposto"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-comment fa-stack-1x fa-inverse"></i>
		</span></span><?php comments_template(); ?>
	</aside>
</div>
<div class="sidebar"><?php get_sidebar('right') ?>

</div>
<div class="clearfix"></div>
 
</div> <!-- colonnaArticoli -->

<?php endwhile; endif; ?>

<?php get_footer() ?>

