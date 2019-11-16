<div class="social-media-wrap cell small-6">
	<ul class="social-icons">
		<?php if ( get_option( 'client_twitter_url' ) ) { ?>
			<li class="si-twitter"><a href="<?php echo get_option( 'client_twitter_url' ); ?>" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_facebook_url' ) ) { ?>
			<li class="si-facebook"><a href="<?php echo get_option( 'client_facebook_url' ); ?>" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_google_url' ) ) { ?>
			<li class="si-google"><a href="<?php echo get_option( 'client_google_url' ); ?>" target="_blank"><i class="fab fa-google-plus-square"></i> Google+</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_linkedin_url' ) ) { ?>
			<li class="si-linkedin"><a href="<?php echo get_option( 'client_linkedin_url' ); ?>" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_instagram_url' ) ) { ?>
			<li class="si-instagram"><a href="<?php echo get_option( 'client_instagram_url' ); ?>" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_pinterest_url' ) ) { ?>
			<li class="si-pinterest"><a href="<?php echo get_option( 'client_pinterest_url' ); ?>" target="_blank"><i class="fab fa-pinterest-square"></i> Pinterest</a></li>
		<?php } ?>
		<?php if ( get_option( 'client_youtube_url' ) ) { ?>
			<li class="si-youtube"><a href="<?php echo get_option( 'client_youtube_url' ); ?>" target="_blank"><i class="fab fa-youtube-square"></i> YouTube</a></li>
		<?php } ?>
	</ul>
</div>