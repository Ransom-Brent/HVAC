<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<!-- Customize Page Tab Titles -->
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' '; }
		      elseif (is_404()) {
		         echo 'Not Found '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' page '. $paged; }
		   ?>
	</title>
	
	<!-- Stylesheets -->
	<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" />
	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<header>
		<div class="top-head">
			<div class="row">
				<div class="xxlarge-3 xlarge-3 large-3 medium-3 small-12 columns">
					<h1>
						<a href="<?php echo get_option('home'); ?>/">
							<?php $logo = get_field('site_logo', 'option'); if ($logo): ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
							<?php endif; ?>
						</a>
					</h1>	
				</div>
				<div class="lt-ie9">
					<div class="xxlarge-9 xlarge-9 large-9 medium-9 columns">
						<nav class="clearfix">
							<?php 
								wp_nav_menu(array(
								'menu' => 'Primary Menu', 
								'container_id' => 'cssmenu', 
								'walker' => new CSS_Menu_Maker_Walker()
								)); 
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="middle-header">
			<?php $header_img = get_field('header_image', 'option'); if ($header_img): ?>
				<img src="<?php echo $header_img['url']; ?>" alt="<?php echo $header_img['alt']; ?>" />
			<?php endif; ?>	
			<div class="description">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<p><?php bloginfo('description'); ?></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bottom-header">
			<div class="row">
				<div class="xxlarge-12 xlarge-12 large-12 meduim-12 small-12 columns">
					<h2><?php echo get_field('bottom_headline_text_top', 'option'); ?></h2>
					<h3><?php echo get_field('bottom_headline_text_bottom', 'option'); ?></h3>
				</div>
			</div>
		</div>
	</header>

