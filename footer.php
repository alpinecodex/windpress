<footer class="bg-main-100">
    <div class="container flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-12 md:py-24">
        <!-- Subscribe Form -->
        <div class="md:p-6 md:border border-main-300 w-fit border-dashed">
            <h2 class="text-xl font-medium mt-0 mb-4">Subscribe to our free Newsletter</h2>
            <form class="md:flex h-fit max-w-full" action="your-submission-handler.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required class="border px-4 py-2 w-full md:w-64 focus:outline-none focus:ring focus:border-main-300 mb-2 md:mb-0">
                <button type="submit" class="bg-main-500 w-full md:w-36 text-white px-4 py-2 hover:bg-main-600 focus:outline-none focus:ring focus:border-main-300">Subscribe</button>
            </form>
            <small class="block ml-1 mt-2 text-neutral-400">No Spam, Ever.</small>
        </div>

        <!-- If you would like a menu in the footer you can use this code. -->
        <?php
        // wp_nav_menu(array(
        //     'menu' => 'Main Nav',
        //     'container' => 'ul',
        //     'menu_class' => 'flex space-x-4 underline underline-offset-4',
        // ));
        ?>

        <nav class="lg:flex justify-between mt-8 text-main-600">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if ($logo) :
                ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" class="w-36" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <?php else : ?>
                    <?php bloginfo('name'); ?>
                <?php endif; ?>
            </a>

            <div class="flex gap-4">
                <a class="underline underline-offset-4 hover:opacity-50" href="/terms-of-use" target="_blank" rel="noopener noreferrer">
                    Terms of Use
                </a>
                <a class="underline underline-offset-4 hover:opacity-50" href="/cookies" target="_blank" rel="noopener noreferrer">
                    Cookies
                </a>
                <a class="underline underline-offset-4 hover:opacity-50" href="/privacy-policy" target="_blank" rel="noopener noreferrer">
                    Privacy Policy
                </a>
            </div>
        </nav>
        <div class="text-xs text-main-300">
            <p>Created by <a href="https://alpinecodex.com">Alpine Codex</a>. Code by <a href="https://coywolf.com/">Coywolf</a>, <a href="https://bridger.to">Bridger Tower</a>, and <a href="https://cameronyoungblood.com">Cameron Youngblood</a>.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
    <!-- Insert code on the homepage -->
<?php elseif (is_category()) : ?>
    <!-- Insert code on category pages -->
<?php endif; ?>

<script>
    // JavaScript to handle mobile menu toggle and close on outside click
    document.addEventListener("DOMContentLoaded", function() {
        const showMenuButton = document.getElementById("show-menu-mobile");
        const mobileMenu = document.querySelector(".mobile-menu");

        showMenuButton.addEventListener("click", function() {
            if (mobileMenu.style.display === "block") {
                mobileMenu.style.display = "none";
            } else {
                mobileMenu.style.display = "block";
            }
        });

        // Add event listener to close mobile menu on outside click
        document.addEventListener("click", function(event) {
            if (!mobileMenu.contains(event.target) && event.target !== showMenuButton) {
                mobileMenu.style.display = "none";
            }
        });
    });
</script>

</body>

</html>