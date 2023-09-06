<footer class="bg-blue-100">
    <div class="container flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-12 md:py-24">
        <!-- Subscribe Form -->
        <div class="md:p-6 md:border border-blue-300 w-fit border-dashed">
            <h2 class="text-xl font-medium mt-0 mb-4">Subscribe to our free Newsletter</h2>
            <form class="md:flex h-fit max-w-full" action="your-submission-handler.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required class="border px-4 py-2 w-full md:w-64 focus:outline-none focus:ring focus:border-blue-300 mb-2 md:mb-0">
                <button type="submit" class="bg-blue-500 w-full md:w-36 text-white px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Subscribe</button>
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

        <nav class="lg:flex justify-between mt-8 text-blue-600">
            <a class="flex items-center gap-2 mb-4 lg:mb-0 text-sm" href="/">
                <img class="w-36" src="<?php bloginfo('template_directory'); ?>/public/windpress.png" alt="Windpress Logo">
                © 2023 – Present
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
        <div class="text-sm text-blue-300">
            <p>Created by <a href="https://alpinecodex.com">Alpine Codex</a>. Code by <a href="https://coywolf.com/">Coywolf</a>, <a href="https://brijr.dev">Bridger Tower</a>, and <a href="https://cameronyoungblood.com">Cameron Youngblood</a>.</p>
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
    // JavaScript to handle mobile menu toggle
    document.addEventListener("DOMContentLoaded", function() {
        const showMenu = document.getElementById("show-menu");
        const mobileMenu = document.querySelector(".mobile-menu");

        showMenu.addEventListener("change", function() {
            if (showMenu.checked) {
                mobileMenu.style.display = "block";
            } else {
                mobileMenu.style.display = "none";
            }
        });
    });
</script>
</body>

</html>