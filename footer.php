<footer class="bg-blue-100">
  <div class='flex flex-col m-auto gap-8 max-w-screen-lg px-6 py-24'>
    <form class="flex h-fit" action="your-submission-handler.php" method="post">
      <input type="email" name="email" placeholder="Enter your email" required
        class="border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
      <button type="submit"
        class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Subscribe</button>
    </form>
    <nav class="">
      <a href="/"><img class="w-36" src=" <?php bloginfo('template_directory'); ?>/public/windpress.png"
          alt="Windpress Logo"></a>
      <?php
            wp_nav_menu(array(
              'menu' => 'Main Nav',
              'container' => 'ul',
              'menu_class' => 'flex space-x-4 underline underline-offset-4',
            ));
          ?>
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
