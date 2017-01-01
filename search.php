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
	
	<?php if ( have_posts() ) : ?>
		<p class="page-title"><?php echo 'Search Results for: ' . '<span>' . get_search_query() . '</span>'; ?></p>
		
		<?php get_template_part( 'loop', 'search' ); ?>
		
	<?php else : ?>
		
		<div id="search-post-0">
		<p class="entry-title"><?php echo "Nothing Found"; ?></p>
			<div class="entry-content">
				<p><?php echo 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.'; ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #search-post-0 -->
	
	<?php endif; ?>

	</div><!-- #main-content -->

		</div>
		

			
<?php get_footer(); ?>