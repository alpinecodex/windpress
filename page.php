<?php get_header(); ?>
		<main>
			<article class="contain">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				<?php endwhile; endif; ?>
			</article>
		</main>
<?php get_footer(); ?>