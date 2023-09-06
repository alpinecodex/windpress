<?php get_header(); ?>

<div class="intro flex flex-col m-auto gap-8 max-w-screen-lg px-6 pt-24 <?php echo get_the_category($id)[0]->slug; ?>">
    <div class="contain mb-12">
        <header>
            <h1 class="mb-2"><?php single_cat_title(); ?></h1>
        </header>
        <h2 class="text-xl my-0"><?php echo category_description(); ?></h2>
    </div>
</div>

<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 pb-24">
    <section class="contain grid md:grid-cols-2 lg:grid-cols-3 gap-8 pb-16">
        <?php
        $post_counter = 0; // Initialize the counter
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
                    <div class="w-full overflow-hidden">

                        <!-- Image -->
                        <div class="relative w-full object-cover object-center group">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'w-full h-56 object-cover'));
                            } else { ?>
                                <img class="w-full h-full" src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png" alt="<?php the_title(); ?>" />
                            <?php } ?>
                            <div class="w-full z-10 h-full overflow-hidden group-hover:flex items-center justify-center hidden absolute top-0 bg-black bg-opacity-25">
                                <p class="text-white flex gap-2 items-baseline">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </p>
                            </div>
                        </div>

                        <!-- Category and Title -->
                        <div class="snippet flex flex-col gap-4 pt-4">
                            <h2 class="text-2xl m-0 font-medium group-hover:underline underline-offset-4"><?php the_title(); ?></h2>
                            <time class="uppercase text-sm hover:no-underline" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                        </div>
                    </div>
                </a>
            <?php
                $post_counter++;
            endwhile;
            ?>
    </section> <!-- Close the last section -->

    <nav class="pagination mt-8 absolute bottom-0">
        <div class="older underline underline-offset-4 hover:opacity-50"><?php next_posts_link('&lt; Older Entries') ?>
        </div>
        <div class="newer underline underline-offset-4 hover:opacity-50"><?php previous_posts_link('Newer Entries &gt;') ?>
        </div>
    </nav>
<?php
        else :
?>
    <h2 class="center">Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
<?php
        endif;
?>
</section>
</main>
s
<?php get_footer(); ?>