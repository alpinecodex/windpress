<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="bg-main-200">
            <!-- Hero Section -->
            <div class="contain flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-12 md:py-24">
                <header class="flex flex-col gap-4">
                    <h1 class="text-main-900 text-4xl md:text-6xl"><?php the_title(); ?></h1>
                </header>
            </div>
        </section>
        <main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-12 md:py-24">
            <article class="contain">
                <?php the_content(); ?>
            </article>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>