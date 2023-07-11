<?php get_header(); ?>
<main>
  <article class="contain">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $cat = get_the_category(); $cat_link = get_category_link( $cat[0]->cat_ID ); ?>
    <header>
      <h1><?php the_title(); ?></h1>
      <?php echo '<p>' . get_the_excerpt() . '</p>'; ?>
    </header>
    <div class="byline">
      <p class="author"><a rel="author" class="person"
          href="<?php echo get_the_author_meta('user_url'); ?>"><?php the_author(); ?></a> <span>|</span> <time
          datetime="<?php the_time('c'); ?>"><?php the_time('m/j/Y'); ?> <?php the_time('g:ia'); ?></time>
        <span>|</span> <a href="<?php echo $cat_link ?>"
          class="<?php echo get_the_category( $id )[0]->slug; ?>"><?php echo get_the_category( $id )[0]->name; ?></a>
      </p>
    </div>
    <?php the_content(); ?>
    <div class="about">
      <div class="gravatar">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 120); ?>
      </div>
      <div class="bio">
        <p><a rel="author" class="person"
            href="<?php echo get_the_author_meta('user_url'); ?>"><?php the_author(); ?></a></p>
        <p><small><?php echo get_the_author_meta('description'); ?></small></p>
      </div>
    </div>
    <?php //comments_template(); ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    <?php endwhile; else: ?>
    <h1>No Post</h1>
    <?php endif; ?>
  </article>
</main>
<?php get_footer(); ?>
