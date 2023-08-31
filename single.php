<?php get_header(); ?>
<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
  <article class="contain">
    <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
    <?php $cat = get_the_category();
            $cat_link = get_category_link($cat[0]->cat_ID); ?>


    <div class="flex flex-col gap-8"><?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('class' => 'w-full max-h-96 object-cover object-center rounded-lg'));
                } else { ?>
      <img class="w-full h-full" src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png"
        alt="<?php the_title(); ?>" />
      <?php } ?>

      <header>
        <h1 class="font-medium mb-0"><?php the_title(); ?></h1>
      </header>

      <div class="">
        <p class="m-0">
          <time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
          <span>|</span> <a href="<?php echo $cat_link ?>"
            class="<?php echo get_the_category($id)[0]->slug; ?>"><?php echo get_the_category($id)[0]->name; ?></a>
        </p>
      </div>
    </div>

    <hr class="my-12" />

    <section
      class="my-12 prose prose-slate md:prose-lg lg:prose-xl prose-img:rounded-lg prose-headings:font-medium prose-a:text-blue-600">
      <?php the_content(); ?>
    </section>


    <?php endwhile; else: ?>
    <h1>No Post</h1>
    <?php endif; ?>
  </article>
</main>
<?php get_footer(); ?>z
