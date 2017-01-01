<?php
	$frontpage_id = get_option('page_on_front');
	$main_pic_alt = get_post_meta($post->ID, 'alt-tag', true); 
	$small1_link = get_post_meta($frontpage_id, 'small1_link', true); 
	$small2_link = get_post_meta($frontpage_id, 'small2_link', true); 
	$small3_link = get_post_meta($frontpage_id, 'small3_link', true); 
	$small4_link = get_post_meta($frontpage_id, 'small4_link', true); 
	$small1_text = get_post_meta($frontpage_id, 'small1_text', true); 
	$small2_text = get_post_meta($frontpage_id, 'small2_text', true); 
	$small3_text = get_post_meta($frontpage_id, 'small3_text', true); 
	$small4_text = get_post_meta($frontpage_id, 'small4_text', true); 
	$main_header_text = get_post_meta($frontpage_id, 'main_header_text', true); 
	
?>
 <!--img  title="<?php echo $main_pic_alt;?>" alt="<?php echo $main_pic_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/main_pic.jpg" id="main_pic"/-->
<div clear="all"></div>

   
	<a href="<?php echo $small1_link;?>"><img  title="<?php echo $main_pic_alt;?>" alt="<?php echo $main_pic_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/small1.png" /></a>
	
   <a href="<?php echo $small2_link;?>"><img  title="<?php echo $small2_text;?>" alt="<?php echo $small2_text;?>"  src="<?php echo get_template_directory_uri() ?>/images/small2.png" id="small2"/></a>
   <a href="<?php echo $small3_link;?>"><img  title="<?php echo $small3_text;?>" alt="<?php echo $small3_text;?>"  src="<?php echo get_template_directory_uri() ?>/images/small3.png" id="small3"/></a>
   <a href="<?php echo $small4_link;?>"><img  title="<?php echo $small4_text;?>" alt="<?php echo $small4_text;?>"  src="<?php echo get_template_directory_uri() ?>/images/small4.png" id="small4"/></a>
  <?php $video_alt = get_post_meta($frontpage_id, 'video_alt', TRUE);$video_link = get_post_meta($frontpage_id, 'video_link', TRUE);?> 
  <!--a href="<?php echo $video_link;?>">
  <img  title="<?php echo $video_alt;?>" alt="<?php echo $video_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/videos.png" id="video_menu"/>
  </a-->	
<div clear="all"></div>
		<!--div id="access">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div--><!-- #access -->
<div clear="all"></div>
