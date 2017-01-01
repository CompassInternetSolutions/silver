	<?php 
		$frontpage_id = get_option('page_on_front');
		$footer_text = get_post_meta($frontpage_id, 'footer_text', true);
	?>

<br clear="all" />

</div><!-- #main --></div><!-- #wrapper -->
<div clear="all"></div>
	<div id="footer">
	

		<div id="footer-inner">
		<img  title="" alt=""  src="<?php echo get_template_directory_uri() ?>/images/footer-sep.png" id="footer-sep"/>
		<?php wp_nav_menu( array(
				  'theme_location'  => 'footersitemap',
				  'menu'            => '', 
				  'container'       => 'div', 
				  'container_class' => '', 
				  'container_id'    => 'footer-sitemap', 
				  'menu_class'      => '', 
				  'menu_id'         => '',
				  'echo'            => true,
				  'fallback_cb'     => '',
				  'before'          => '',
				  'after'           => '',
				  'link_before'     => '',
				  'link_after'      => '',
				  'depth'           => 0,
				  'walker'          => ''
				  ) );
		?><!-- #footer-sitemap -->

		</div>
		
<div clear="all" /></div>

			<!--div id="footer-disclaimer">
			
			<?php echo get_compass('footer_disc'); ?>
			
			
			
			</div--><!-- #footer-disclaimer -->
<?php wp_footer(); ?>
		</div>
	</div><!-- #footer -->




</body>
</html>