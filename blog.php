<?php get_header(); ?>

<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
  <!-- Most Recent Post Section -->
  <section class="contain">
    <?php
        $args = array(
            'posts_per_page' => 1,  // Display only one post
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
    <a href="<?php the_permalink(); ?>" class="group">
      <div class="w-full flex gap-12">
        <!-- Image -->
        <div class="relative w-full object-cover object-center group">
          <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'w-full h-96 object-cover'));
                            } else { ?>
          <img class="w-full h-full lg:w-[500px]"
            src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png" alt="<?php the_title(); ?>" />
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
        <div class="snippet flex flex-col gap-4 pt-4 max-w-1/2">
          <h2 class="text-4xl m-0 font-medium group-hover:underline underline-offset-4"><?php the_title(); ?></h2>
          <p class="text-gray-600"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
          <time class="uppercase text-sm hover:no-underline"
            datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
        </div>

      </div>
    </a>
    <?php
            endwhile;
        else :
            ?>
    <h2 class="center">Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php
        endif;
        wp_reset_postdata();  // Reset the post data to the main query
        ?>
  </section>

  <!-- Email Section -->
  <section class="contain flex gap-12 justify-between border border-dashed p-8">
    <div class="my-0">
      <h2 class="text-2xl mt-0 font-medium mb-4">Subscribe to Our Free Newsletter</h2>
      <p class="text-gray-600 mb-0">Stay up-to-date with our latest news and updates by signing up for the email
        newsletter.
      </p>
    </div>
    <div>
      <form class="flex h-fit" action="your-submission-handler.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required
          class="border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
        <button type="submit"
          class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Subscribe</button>
      </form>
      <small class="block ml-1 mt-2 text-neutral-400">No Spam, Ever.</small>
    </div>
  </section>


  <!-- Posts Section -->
  <section class="relative grid md:grid-cols-2 lg:grid-cols-3 gap-8 pb-16">
    <?php
        $post_counter = 0;  // Initialize the counter
        if (have_posts()) :
            while (have_posts()) : the_post();
                $cat = get_the_category();
                $cat_link = get_category_link($cat[0]->cat_ID);

                // Skip the first post (most recent)
                if ($post_counter === 0) {
                    $post_counter++;
                    continue;
                }
        ?>

    <a href="<?php the_permalink(); ?>" class="group">
      <div class=" w-full overflow-hidden">

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


    <?php endwhile; ?>
    <nav class="pagination mt-8 absolute bottom-0">
      <div class="older underline underline-offset-4 hover:opacity-50"><?php next_posts_link('&lt; Older Entries') ?>
      </div>
      <div class="newer underline underline-offset-4 hover:opacity-50">
        <?php previous_posts_link('Newer Entries &gt;') ?></div>
    </nav>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>
