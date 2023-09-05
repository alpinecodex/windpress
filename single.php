<?php get_header(); ?>
<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
  <article class="contain">
    <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
    <?php $cat = get_the_category();
            $cat_link = get_category_link($cat[0]->cat_ID); ?>

    <header>
      <h1 class="font-medium mb-8"><?php the_title(); ?></h1>
    </header>

    <div class="flex flex-col gap-8"><?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('class' => 'w-full h-[480px] object-cover object-center'));
                } else { ?>
      <img class="w-full h-full" src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png"
        alt="<?php the_title(); ?>" />
      <?php } ?>



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

  <hr class="my-8" />


  <!-- Featured Posts Section -->
  <h2 class=" text-3xl font-medium">Featured Posts</h2>
  <section class="contain grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
  // Get the current post ID
  $current_post_id = get_the_ID();

  $featured_posts_args = array(
    'posts_per_page' => 3, // Display three most recent posts
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post__not_in'   => array($current_post_id), // Exclude the current post
  );

  $featured_posts_query = new WP_Query($featured_posts_args);

  if ($featured_posts_query->have_posts()) :
    while ($featured_posts_query->have_posts()) : $featured_posts_query->the_post();
  ?>
    <a href="<?php the_permalink(); ?>" class="group">
      <div class="w-full overflow-hidden">
        <!-- Image -->
        <div class="relative w-full object-cover object-center group">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'w-full h-56 object-cover'));
          } else { ?>
          <img class="w-full h-full" src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png"
            alt="<?php the_title(); ?>" />
          <?php } ?>
          <div
            class="w-full z-10 h-full overflow-hidden group-hover:flex items-center justify-center hidden absolute top-0 bg-black bg-opacity-25">
            <p class="text-white flex gap-2 items-baseline">Read More <svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
              </svg>
            </p>
          </div>
        </div>

        <!-- Category and Title -->
        <div class="snippet flex flex-col gap-4 pt-4">
          <h2 class="text-2xl m-0 font-medium group-hover:underline underline-offset-4"><?php the_title(); ?></h2>
          <time class="uppercase text-sm hover:no-underline"
            datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
        </div>
      </div>
    </a>
    <?php
    endwhile;
    wp_reset_postdata();
  else :
    echo '<p>No featured posts found.</p>';
  endif;
  ?>
  </section>

</main>


<?php get_footer(); ?>
