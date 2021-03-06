<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Save the Children </title>
	
	<!--<script src="#"></script>-->

	<?php 
		wp_enqueue_style("h2h-style-navbar", get_template_directory_uri() . "/assets/css/navbar.css", $version, "all");
		wp_head();
	?>
</head>

<body>
	<!-- Navbar-->
	<div class="navbar">
		<div class="logo">
			<a class="logo">
				<img class="web-logo" src="<?php bloginfo('template_url'); ?>/assets/images/STC_Logo_Horiz_WhiteNeg_RGB.png"/>
			</a>
		</div>
		
		<div class="group-2">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => false,
						'theme_location' => 'primary'
					)
				);
			?>
		</div>
		<div style="visibility: hidden; "></div>
		<div style="visibility: hidden; "></div>
		<div class="dropdown account menu-item">
			<?php if (is_user_logged_in()): ?>
				<a class="logo" href='#'>
					<img class="account-logo icon" src="<?php bloginfo('template_url'); ?>/assets/images/icon.png">
				</a>
				<div class="dropdown-content">
					<a href="<?php echo get_home_url();?>/my-account">My Account</a>
					<a href="#s2">Help</a>
					<a href="<?php echo wp_logout_url(); ?>">Logout</a>
				</div>
			<?php else: ?>
				<a class="logo" href='<?php echo get_home_url(); ?>/login'>
					<div class="account-logo login">LOGIN</div>
				</a>
			<?php endif; ?>

		</div>
	</div>