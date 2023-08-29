<?php get_header(); ?>

<section class="bg-slate-200">
    <!--  Hero Section  -->
    <div class="contain flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
        <header class="flex flex-col gap-4">
            <img src="/public/logo.png" alt="">
            <h1 class="text-neutral-800 text-5xl">Tailwind X Wordpress Starter Theme</h1>
            <p>You can change this text in the <code>head.php</code> file in the theme folder.</p>
        </header>
    </div>
</section>
<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">


    <!-- Homepage Posts Section -->
    <section class="contain grid md:grid-cols-2 gap-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $cat = get_the_category();
                $cat_link = get_category_link($cat[0]->cat_ID); ?>
                <div class="w-full rounded-t-lg overflow-hidden">

                    <a class="relative w-full object-cover object-center group" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'w-full h-56 object-cover'));
                        } else { ?>
                            <img class="w-full h-full" src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        <div class="w-full z-10 h-full overflow-hidden group-hover:flex items-center justify-center hidden absolute top-0 bg-black bg-opacity-25">
                            <p class="text-white">Read More &rarr;</p>
                        </div>
                    </a>

                    <!-- Category and Title -->
                    <div class="snippet flex flex-col gap-4 p-6 bg-gray-50 rounded-b-lg">
                        <a href="<?php echo $cat_link; ?>" class="tag text-xs uppercase text-gray-700 opacity-75 hover:opacity-100 hover:no-underline <?php echo get_the_category($id)[0]->slug; ?>"><?php echo get_the_category($id)[0]->name; ?></a>
                        <h2 class="text-3xl m-0 font-medium"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <time class="uppercase font-mono text-sm" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                    </div>
                </div>
            <?php endwhile; ?>
            <nav class="pagination">
                <div class="older"><?php next_posts_link('&lt; Older Entries') ?></div>
                <div class="newer"><?php previous_posts_link('Newer Entries &gt;') ?></div>
            </nav>
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>