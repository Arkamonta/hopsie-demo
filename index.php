<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

	<div class="jd-banner-page-header">
		<div class="grid-container">
			<div class="grid-x align-middle">
				<h1>Posts</h1>
			</div>
		</div>
	</div>

	<div class="content-wrap index-content grid-container" role="main">
		<div class="grid-x">
			<div class="cell medium-8">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'parts/post', 'index' );
					endwhile;

					get_template_part( 'parts/post', 'nav' );
				endif;
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- end content -->

<?php get_footer(); ?>
