<?php
/*

Template Name: Price Template

*/
?><?php get_header(); ?>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	

		<div id="main-content">
	<div id="breadcrumbs">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
			}
			else {
			echo "Please enable Breadcrumb NavXT";
			}
		?>
		<br clear="all" />
	</div><!-- #breadcrumbs -->
		
		<?php

		$page_h1 = get_post_meta($post->ID, 'h1', true);

		if( $page_h1 != null ) {

			echo '<h1>',$page_h1,'</h1>';

		}

		?>
		
			<?php get_template_part( 'loop', 'index' ); ?>
			<div id="price_button">
				<a href=""><img class="size-full wp-image-1706 aligncenter" title="24 Hour Towing San Francisco" src="<?php echo get_template_directory_uri() ?>/images/number.jpg" alt="24 Hour Towing San Francisco" TITLE="24 Hour Towing San Francisco" width="393" height="86" /></a></p>
				<div id="price_button_text">
				<?php echo $phone_number; 
				     ?>
				</div>

			</div>
			
		</div><!-- #main-content -->	
		
				<?php include(TEMPLATEPATH."/sidebar-right.php");?>

			
<?php get_footer(); ?>