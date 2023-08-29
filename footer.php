<footer class="bg-slate-200">
    <nav class="contain flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
        <?php get_search_form(); ?>
        <?php wp_nav_menu(array('menu' => 'Footer Nav')); ?>
    </nav>
</footer>
<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
    <!-- Insert code on the homepage -->
<?php elseif (is_category()) : ?>
    <!-- Insert code on category pages -->
<?php endif; ?>
</body>

</html>
