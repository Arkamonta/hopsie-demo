<?php
/**
 * Default Single Post Template
 *
 */

get_header(); ?>

	<div class="jd-banner-page-header">
		<div class="grid-container">
			<div class="grid-x align-middle">
				<h1><?php the_title(); ?></h1>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Posted On <?php the_time( 'F j, Y' ); ?></time>
			</div>
		</div>
	</div>

	<div class="content-wrap single-content grid-container" role="main">
		<div class="grid-x">
			<div class="cell medium-8">

				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">
					<?php the_content(); ?>
				</article>

				<?php comments_template( '', true ); ?>

				<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- end content -->

<?php get_footer(); ?>
