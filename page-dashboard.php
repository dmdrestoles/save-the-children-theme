<?php /*Template Name: Dashboard*/ ?>

<?php 
wp_enqueue_style("h2h-style-dashboard", get_template_directory_uri() . "/assets/css/dashboard.css", $version, "all");
get_header(); 

$categories = get_categories();
$num = 1;
$viewed_pages = 1;

?>

<div class="dashboard">
	<div class="title">Facilitator's Manual ng Heart to HEART</div>
	<div class="dashboard-container">
		<div class="sidebar">
			<div class="header">Hello, Dan!</div>
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
								<div class="bar"><div style="width: 20%;"></div></div>
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
					<?php foreach ($categories as $category): 
						if ($category->name == "Uncategorized"){
							continue;
						}
						$computedValue = checkViewedPagesInCategory(wp_get_current_user()->id, $category->cat_ID);
					?>
					<div class="session">
						<div class="session-container">
							<div class="progress-bar">
								<div class="bar"><div style="width: <?php echo $computedValue; ?>%;"></div></div>
								<div class="percentage"><?php echo $computedValue; ?>% Complete</div>
							</div>
						</div>
						<div class="details">
							<div class="session-number">Session <?php echo $num++; ?></div>
							<div class="session-title"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>