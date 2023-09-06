<footer class="bg-blue-100">
    <div class="container flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24">
        <div class="p-6 border border-blue-300 w-fit border-dashed">
            <h2 class="text-xl font-medium mt-0 mb-4">Subscribe to our free Newsletter</h2>
            <form class="flex items-center gap-4" action="your-submission-handler.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required class="border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Subscribe</button>
            </form>
        </div>
        <?php
        wp_nav_menu(array(
            'menu' => 'Main Nav',
            'container' => 'ul',
            'menu_class' => 'flex space-x-4 underline underline-offset-4',
        ));
        ?>
        <nav class="flex items-center justify-between mt-8 text-blue-600">
            <a href="/">
                <img class="w-36" src="<?php bloginfo('template_directory'); ?>/public/windpress.png" alt="Windpress Logo">
            </a>
            <div class="flex gap-4">
                <a class="underline underline-offset-4 hover:opacity-50" href="/" target="_blank" rel="noopener noreferrer">
                    Terms of Use
                </a>
                <a class="underline underline-offset-4 hover:opacity-50" href="/" target="_blank" rel="noopener noreferrer">
                    Cookies
                </a>
                <a class="underline underline-offset-4 hover:opacity-50" href="/" target="_blank" rel="noopener noreferrer">
                    Privacy Policy
                </a>
            </div>

        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
    <!-- Insert code on the homepage -->
<?php elseif (is_category()) : ?>
    <!-- Insert code on category pages -->
<?php endif; ?>
</body>

</html>