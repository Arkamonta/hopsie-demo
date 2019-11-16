<?php
/**
 * Default 404 Template
 *
 */

get_header(); ?>

	<div class="jd-banner-page-header">
		<div class="grid-container">
			<div class="grid-x align-middle">
				<h1>404 - Not found</h1>
			</div>
		</div>
	</div>

	<div class="content-wrap page-content grid-container" role="main">
		<div class="grid-x">
			<div class="cell medium-8">

				<article id="post-404-error" <?php post_class( 'group' ); ?>>
					<h2><?php _e( 'Page could not be found', 'h5bs' ); ?></h2>
				</article>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- end content -->

<?php get_footer(); ?>
