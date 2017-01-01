<?php
$frontpage_id = get_option('page_on_front');
$local_logo_title = get_post_meta($frontpage_id, 'alt-logo', true);
$header_alt = get_post_meta($frontpage_id, 'header_text', true);
$h24_alt= get_post_meta($frontpage_id, 'h24_alt', true);
$certified_alt= get_post_meta($frontpage_id, 'certified_alt', true);
$header_text= get_post_meta($frontpage_id, 'header_text', true);

/* Phone Numbers */
global $phone_number;
$local_phone_number = get_post_meta($post->ID, 'phone', true);
if (!isset( $_COOKIE["PhoneNumber"] )) {

	if ($local_phone_number != null) {

		$phone_number = $local_phone_number;

		//1 day

		setcookie('PhoneNumber', $local_phone_number, time()+60*60*24,'/');



	} else {

		$phone_number = get_compass('phone_number');

		//1 day

		setcookie('PhoneNumber', $phone_number, time()+60*60*24,'/');

	}

} else {

	$phone_number = $_COOKIE["PhoneNumber"];

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'compass' ), max( $paged, $page ) );
	?></title>

	<link rel="shortcut icon" href="<?php echo get_bloginfo('url') ?>/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

<?php
/**
 * Scripts Section 
 */
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/videobox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/videobox.js"></script>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
 <div id="header">
	<div id="header_gradient">
		<div id="branding">
			<div id="phone-number">
				<p><?php echo $phone_number ?></p>
			</div><!-- #phone-number -->
			<div id="site-logo">
			<a href="<?php echo home_url( '/' ); ?>" ><img 
			src="<?php 
			if (get_compass('logo_url') != null) {
			echo get_compass('logo_url');
			} else {
			echo bloginfo('template_directory') . '/images/logo.png';
			}
			?>"

			alt="<?php echo $local_logo_title; ?>" title="<?php echo $local_logo_title; ?>"
			/></a>
			</div><!-- #site-logo -->
			

			<!--div id="site-description"><?php bloginfo( 'description' ); ?></div-->
			<br clear="all" />		
			<img  title="<?php echo $certified_alt;?>" alt="<?php echo $certified_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/certified.png" id="certified"/>
			<img  title="<?php echo $h24_alt;?>" alt="<?php echo $h24_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/h24.png" id="h24"/>
			<img  title="" alt=""  src="<?php echo get_template_directory_uri() ?>/images/call_now.png" id="call_now"/>
 		<div id="access">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
			</div><!-- #branding -->
	</div><!-- #header_gradient -->
</div><!-- #header -->
			
		<div class="clear_all" ></div>
		
<div id="main">
