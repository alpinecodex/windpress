		<footer class="intro flex flex-col m-auto max-w-screen-lg p-6">
		  <nav class="contain">
		    <?php get_search_form(); ?>
		    <?php wp_nav_menu( array('menu' => 'Footer Nav' )); ?>
		  </nav>
		</footer>
		<?php wp_footer(); ?>
		<?php if ( is_front_page() ) : ?>
		<!-- Insert code on the homepage -->
		<?php elseif ( is_category() ) : ?>
		<!-- Insert code on category pages -->
		<?php endif; ?>
		</body>

		</html>
