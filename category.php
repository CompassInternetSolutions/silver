<?php get_header(); ?>


	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	<div clear="all" /></div>
		<div id="sidebar">
		<?php get_sidebar(); ?>
		</div><!-- #sidebar -->

		<div id="main-content-wrapper">
		<div id="main-content">
	<div id="breadcrumbs">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
			}
			else {
			}
		?>
		
	</div><!-- #breadcrumbs -->
		
			<h1><?php single_cat_title(); ?></h1>		
		<img  title="" alt=""  src="<?php echo get_template_directory_uri() ?>/images/h1_bottom.jpg" />
			<?php get_template_part( 'loop', 'index' ); ?>
			
		
		</div><!-- #main-content -->	
		<img  title="" alt=""  src="<?php echo get_template_directory_uri() ?>/images/main_area_footer.png" />

		</div>
		

			
<?php get_footer(); ?>