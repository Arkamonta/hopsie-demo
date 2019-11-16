<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ) . bloginfo( 'name' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header grid-x align-middle" role="banner">
    <p class="logo cell medium-4">
		<a href="<?php echo home_url( '/' ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo_logo.png" alt="<?php bloginfo( 'name' ); ?>" />
		</a>
	</p>

    <nav class="nav-main-wrap show-for-medium cell small-8" role="navigation">
        <?php h5bs_primary_nav(); ?>
    </nav>

    <nav class="nav-mobile-wrap show-for-small-only" role="navigation">
        <i id="nav-mobile-toggle" data-toggle="nav-mobile" class="nav-mobile-toggle fa fa-bars"></i>
        <?php h5bs_mobile_nav(); ?>
    </nav>
</header>