<?php 
	$frontpage_id = get_option('page_on_front');
	$map_link = get_post_meta($frontpage_id, 'map_link', true);
	$map_alt = get_post_meta($frontpage_id, 'map_alt', true);
?>
		<div id="menu-left">
		<div id="right_menu">
		<!--div id="sidebar_header"><?php echo $sidebar_header;?></div-->
		<?php wp_nav_menu( array(
				  'theme_location'  => 'sidebar',
				  'menu'            => '', 
				  'container'       => 'div', 
				  'container_class' => '', 
				  'container_id'    => 'servicesmenu', 
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
		?>	

		<br clear="all" />
		</div>
		<br/>
		<div id="map">
			
	       <img  title="<?php echo $map_alt;?>" alt="<?php echo $map_alt;?>"  src="<?php echo $map_link;?>" />
		</div>
	
	</div><!-- #menu-left -->
