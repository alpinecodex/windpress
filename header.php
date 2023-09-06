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
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
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
    <nav class="top-0 bg-blue-200 sticky z-50 shadow-sm">
        <div class="flex justify-between items-center p-6 max-w-screen-lg m-auto">
            <!-- Site Logo -->
            <a href="/"><img class="w-36" src=" <?php bloginfo('template_directory'); ?>/public/windpress.png" alt="Windpress Logo"></a>
            <!-- Start mobile nav show and hide -->
            <div class="md:hidden">
                <label for="show-menu" class="show-menu">&#9776;</label>
                <input type="checkbox" id="show-menu" role="button">
            </div>
            <!-- End mobile nav show and hide -->
            <div class="flex gap-4 items-center">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Main Nav',
                    'container' => 'ul',
                    'menu_class' => 'flex space-x-4 underline underline-offset-4',
                ));
                ?> <a href="https://alpinecodex.com/" class="px-4 ml-2 py-2 bg-blue-600 hover:bg-blue-900 text-white">
                    Download Now
                </a>
            </div>
        </div>
    </nav>