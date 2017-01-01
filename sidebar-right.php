<div id="sidebar-right">
		<?php 
			$frontpage_id = get_option('page_on_front');
			$twitter_link = get_post_meta($frontpage_id, 'twitter_link', true);
			$facebook_link = get_post_meta($frontpage_id, 'facebook_link', true);
			$gplus_link = get_post_meta($frontpage_id, 'gplus_link', true);
		
		?>

		<!--div id="social_icons">

			<a title="Facebook" rel="nofollow" href="<?php echo $facebook_link; ?>" target="_blank"><img  src="<?php echo get_template_directory_uri() ?>/images/facebook.png" id="facebook"/></a>
			<a title="Twitter" rel="nofollow" href="<?php echo $twitter_link; ?>" target="_blank"><img  src="<?php echo get_template_directory_uri() ?>/images/twitter.png" id="twitter"/></a>
			<a title="Google Plus" rel="nofollow" href="<?php echo $gplus_link; ?>"  target="_blank"><img  src="<?php echo get_template_directory_uri() ?>/images/google_plus.png" id="google_plus"/></a>

		</div-->

</div><!-- #sidebar-right -->