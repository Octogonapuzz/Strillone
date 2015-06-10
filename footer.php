</div> <!-- MainBox -->



	</div>
	<div id="back-top"><a href="#testata"><i class="fa fa-chevron-up"></i></a></div>
	<footer> <!--nextpage-->
		<div class="footerContainer">
		<small class="copyright">Copyright - <?php bloginfo('title','display') ?> di <a href="http://danieleirsuti.com" rel="author"> Daniele Irsuti</a></small>
		<nav id="nav1"><?php wp_nav_menu(array('theme_location' => 'header-menu')) ?></nav>
		<div class="clearfix"></div>

		</div>
	</footer>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	
	<?php wp_footer() ?>
	
</body>
</html>