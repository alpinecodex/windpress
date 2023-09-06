<?php get_header(); ?>
<main class="flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-12 md:py-24">
    <section class="contain">
        <header>
            <h1>Search Results</h1>
        </header>
        <?php get_search_form(); ?>
        <br>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="newsfeed">
                    <div class="thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                                                                the_post_thumbnail();
                                                            } else { ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/fallback-image.png" alt="<?php the_title(); ?>" />
                            <?php } ?></a>
                    </div>
                    <div class="snippet">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <nav class="pagination">
                <div class="older"><?php next_posts_link('&lt; Older Entries') ?></div>
                <div class="newer"><?php previous_posts_link('Newer Entries &gt;') ?></div>
            </nav>
        <?php else : ?>
            <h2 class="center">No Results Found</h2>
            <p>No posts found. Try a different search.</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>