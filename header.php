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
		<div class="dropdown account">
			<a class="logo" href='#'>
				<div class="account-logo login">LOGIN</div>
				<!--<img class="account-logo" src="<?php bloginfo('template_url'); ?>/assets/images/icon.png">-->
			</a>
			
			<?php if (is_user_logged_in()): ?>
				<div class="dropdown-content">
					<a href="<?php echo get_edit_profile_url(); ?>">My Account</a>
					<a href="#s2">Help</a>
					<a href="<?php echo wp_logout_url(); ?>">Logout</a>
				</div>
			<?php ?>
			<!-- if user is not logged in, login button -->
			<?php else: ?>
				<div class="dropdown-content">
					<a href="<?php echo bloginfo('template_url'); ?>/login">Login</a>
				</div>
			<?php endif; ?>
		</div>
	</div>