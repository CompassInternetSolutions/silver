<?php
/*

Template Name: LP template

*/
?>
<?php get_header('lp'); ?>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content_lp.php");?>
	</div><!-- #top-content -->
	

		<div id="main-content" style="margin-top:1px">
		
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
			
			<?php if (is_front_page()) : ?> 
			<!-- <div id="homepage-articles">  -->
				<?php// include(TEMPLATEPATH."/homepage-articles.php");?>
			<!-- </div> -->
			<?php endif; ?>
			
		</div><!-- #main-content -->	
		
				<?php include(TEMPLATEPATH."/sidebar-right.php");?>

			
<br clear="all" />
	<div id="credit" style="margin-top:40px">
		<?php 
			$frontpage_id = get_option('page_on_front');
			$credit_card_alt = get_post_meta($frontpage_id, 'credit_card_alt', true);
		?>
		<img src="<?php bloginfo('template_directory'); ?>/images/credit.jpg"   alt="<?php echo $credit_card_alt;?>"  title="<?php echo $credit_card_alt;?>"/>
	</div>

</div><!-- #main --></div><!-- #wrapper -->

		<!--img src="<?php bloginfo('template_directory'); ?>/images/stroke.jpg" width="721" height="11" class="footer-separator" alt="" /-->
	<br clear="all" />
	<?php if ( is_front_page() ) : ?>
	
	<div id="footer-top">  
		<div id="footer-top-inner">
			<div class="footer-links-one_forth">
				<?php if ( is_active_sidebar( 'footer-links-eastbay' ) ) : ?>
					<?php dynamic_sidebar( 'footer-links-eastbay' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer-links-one_forth">
				<?php if ( is_active_sidebar( 'footer-links-sanfrancisco' ) ) : ?>
					<?php dynamic_sidebar( 'footer-links-sanfrancisco' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer-links-one_forth">
				<?php if ( is_active_sidebar( 'footer-links-sanjose' ) ) : ?>
					<?php dynamic_sidebar( 'footer-links-sanjose' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer-links-one_forth sac">
				<?php if ( is_active_sidebar( 'footer-links-sacramento' ) ) : ?>
					<?php dynamic_sidebar( 'footer-links-sacramento' ); ?>
				<?php endif; ?>
			</div>

	

		
	<br clear="all" />
	
		<div id="footer-social">
		
			<?php if ( is_active_sidebar( 'footer-social' ) ) : ?>
				<?php dynamic_sidebar( 'footer-social' ); ?>
			<?php endif; ?>

		</div><!-- #footer-social -->
		<br clear="all" />
		<!--center><img src="<?php bloginfo('template_directory'); ?>/images/footer_top_img.jpg" width="188" height="52" class="footer-separator-img" alt="" /></center-->
		</div>
	</div><!-- #footer-top -->
	<?php endif; ?>


	<div id="footer">
	
	<?php 
		$frontpage_id = get_option('page_on_front');
		$footer_text = get_post_meta($frontpage_id, 'footer_text', true);
	?>

		<div id="footer-inner">
			<div id="footer_left_text"> <?php echo $footer_text;?></div>
			<div id="footer_middle_menu">
		<?php wp_nav_menu( array(
				  'theme_location'  => 'footersitemap',
				  'menu'            => '', 
				  'container'       => 'div', 
				  'container_class' => '', 
				  'container_id'    => 'footer-sitemap', 
				  'menu_class'      => '', 
				  'menu_id'         => '',
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'link_before'     => '',
				  'link_after'      => '',
				  'depth'           => 0,
				  'walker'          => ''
				  ) );
		?><!-- #footer-sitemap -->
		</div>
		<div id="footer_right_phone">
		<?php global $phone_number;echo $phone_number;?>
		</div>
		
<br clear="all" />

			<!--div id="footer-disclaimer">
			
			<?php echo get_compass('footer_disc'); ?>
			
			
			
			</div--><!-- #footer-disclaimer -->
<?php wp_footer(); ?>
		</div>
	</div><!-- #footer -->




</body>
</html>