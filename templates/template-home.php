<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

	<div class="jd-banner-home-header">
		<div class="grid-container">
			<div class="grid-x align-center align-middle">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<div class="content-wrap page-content grid-container" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article <?php post_class( 'group' ); ?> role="article">
			<?php the_content(); ?>
		</article>

		<?php endwhile; endif; ?>

	</div><!-- end content -->

	<?php // get_sidebar(); ?>

<?php get_footer(); ?>
