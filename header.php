<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sahlems
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sahlems'); ?></a>
    <header id="masthead" class="site-header ">
        <div id="top-bar">
            <div class="container">
                2260 Southwestern Blvd., West Seneca, NY 14224 <span>|</span> Phone: (716) 662-0062 <span>|</span> Fax:
                716-662-5743 <span>|</span> Office Hours: Monday - Friday 8:00 am - 5:00 pm
            </div>
        </div>
        <div class="site-branding">
            <div id="logo" class="container">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   rel="home">
                    <img src="<?= get_template_directory_uri(); ?>/images/Sahlems-logo.png"/>
                </a>
            </div>
        </div><!-- .site-branding -->
        <nav id="site-navigation" class="main-navigation  container">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'sahlems'); ?></button>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
                'container_class' => '',
                'menu_class' => 'row',

			));
			?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
    <div id="content" class="site-content container">
