<?php
// Used with functions for properly inserting the URL
function curPageURL()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>

<!DOCTYPE html>
<html lang="en-US" class="max-w-screen">

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <style>
		<?php include_once('app.css.php'); //CSS is inline and saved in a PHP file so you can include and exclude styles based on conditions
        ?>
	</style> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="top-0 bg-blue-200 sticky z-50">
        <div class="flex justify-between items-center p-6 max-w-screen-lg m-auto">
            <!-- Site Logo -->
            <a href="/"><img class="w-36" src="<?php bloginfo('template_directory'); ?>/public/windpress.png" alt="Windpress Logo"></a>
            <!-- Mobile Menu -->
            <div class="md:hidden">
                <input type="checkbox" id="show-menu" role="button" class="hidden" checked> <!-- Add the "checked" attribute -->
                <label for="show-menu" class="show-menu block cursor-pointer text-2xl">&#9776;</label>
                <div class="mobile-menu md:hidden absolute top-0 left-0 bg-blue-100 h-screen w-64 transform translate-x-0 transition-transform duration-300 ease-in-out overflow-y-auto">
                    <div class="p-8 space-y-4">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Nav',
                            'container' => 'ul',
                            'menu_class' => 'flex flex-col space-y-2',
                        ));
                        ?>
                        <a href="https://alpinecodex.com/" class="block px-4 py-2 bg-blue-600 hover:bg-blue-900 text-white">
                            Download Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->

            <div class="hidden md:flex gap-4 items-center">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Main Nav',
                    'container' => 'ul',
                    'menu_class' => 'flex space-x-4 underline underline-offset-4',
                ));
                ?> <a href="https://alpinecodex.com/" class="hidden md:block px-4 ml-2 py-2 bg-blue-600 hover:bg-blue-900 text-white">
                    Download Now
                </a>
            </div>
        </div>
    </nav>