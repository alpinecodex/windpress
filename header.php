<!DOCTYPE html>
<html lang="en-US" class="max-w-screen text-text">

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="top-0 bg-main-200 sticky z-50">
        <div class="flex justify-between items-center p-6">
            <!-- Site Logo -->
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if ($logo) :
            ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo esc_url($logo[0]); ?>" class="w-36" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>

            <!-- Mobile Menu -->
            <div class="block md:hidden p-0">
                <label for="show-menu-mobile" class="show-menu block cursor-pointer p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </label>
                <input type="checkbox" id="show-menu-mobile" role="button" class="sr-only hidden p-0">
                <div class="mobile-menu md:hidden absolute top-0 left-0 bg-main-100 h-screen w-64 transform translate-x-0 transition-transform duration-300 ease-in-out overflow-y-auto" style="display: none;">
                    <div class="p-8 space-y-4">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if ($logo) :
                        ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>s
                        <?php endif; ?>

                        <div class="py-8">
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Main Nav',
                                'container' => 'div',
                                'menu_class' => 'flex flex-col space-y-2 list-none',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ));
                            ?>
                            <a href="https://alpinecodex.com/" class="block mt-8 px-4 py-2 bg-main-600 hover:bg-main-900 text-white">
                                Download Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex gap-4 items-center">
                <?php
                if (has_nav_menu('main_nav')) {
                    wp_nav_menu(array(
                        'menu' => 'Main Nav',
                        'container' => 'ul',
                        'menu_class' => 'flex space-x-4 list-none',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker' => new Custom_Nav_Walker(),
                    ));
                }
                ?>
                <a href="https://alpinecodex.com/windpress" class="hidden md:block px-4 ml-2 py-2 bg-main-600 hover:bg-main-900 text-white">
                    Download Now
                </a>
            </div>
            <!-- End Desktop Menu -->
        </div>
    </nav>