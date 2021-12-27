<?php /*Template Name: Dashboard*/ ?>

<?php 
wp_enqueue_style("h2h-style-dashboard", get_template_directory_uri() . "/assets/css/dashboard.css", $version, "all");
get_header(); 
?>

<?php ?>

<div class="dashboard">
	<div class="title">Facilitator's Manual ng Heart to HEART</div>
	<div class="dashboard-container">
		<div class="sidebar">
			<div class="header">Hello, <?php echo wp_get_current_user()->first_name; ?>!</div>
			<div class="options">
				<a href="#">My Account</a>
				<a href="#">Help</a>
				<a href="#">Logout</a>
			</div>
		</div>
		<div class="dashboard-content">
			<div>
				<div class="title">INTRODUCTION</div>
				<div class="line"></div>
				<div class="container">
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Introduksyon</div>
							<div class="session-title">Road to Positive Parenting</div>
						</div>
					</div>
				</div>
			</div>					
			<div>
				<div class="title">SESSIONS</div>
				<div class="line"></div>
				<div class="container">
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 1</div>
							<div class="session-title">Pusong Mulat</div>
						</div>
					</div>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 2</div>
							<div class="session-title">Pusong Bukas</div>
						</div>
					</div>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 3</div>
							<div class="session-title">Pusong Maaruga</div>
						</div>
					</div>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 4</div>
							<div class="session-title">Pusong Mapagkalinga</div>
						</div>
					</div>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 5</div>
							<div class="session-title">Pusong Gumagabay</div>
						</div>
					</div>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"></div>
								<div class="percentage">0% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session 6</div>
							<div class="session-title">Pusong Ganap</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>