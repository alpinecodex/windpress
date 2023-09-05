<?php get_header(); ?>
<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
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
