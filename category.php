<?php /*Template Name: Course Outline*/ ?>

<?php 
wp_enqueue_style("h2h-style-outline", get_template_directory_uri() . "/assets/css/courseOutline.css", $version, "all");
get_header(); 
$category = get_queried_object();
$userID = wp_get_current_user()->id;
$categoryID = $category->term_id;
$progress = checkViewedPagesInCategory($userID, $categoryID);
$args = array(
	'orderby' => 'date',
	'order' => 'ASC',
	'category' => $categoryID
);
$posts = get_posts($args);
?>

<div class="courseOutline">
	<div class="returnToDashboard">
		<a class="back" href="<?php echo get_home_url(); ?>/dashboard">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/back.png">
			<div>Return to Dashboard</div>
		</a>
	</div>
	<div class="outline-content">
		<div class="session">
			<div>
				<div class="session-container"></div>
				<div class="details">
					<div class="session-number"><?php echo $category->description; ?></div>
					<div class="session-title"><?php echo $category->cat_name; ?></div>
				</div>
			</div>
			<div class="progress">
				<div class="bar"><div style="width: <?php echo $progress; ?>%;"></div></div><!-- change value of width here for progress bar completion -->
				<div class="percentage"><?php echo $progress; ?>% Complete</div> <!-- numerical value here should besame with width above -->
			</div>
		</div>
		<div class="outline">
			<div class="title">COURSE OUTLINE</div>
			<div>
				<?php foreach ($posts as $post): 
					if (in_category('Uncategorized', $post)){
						continue;
					}
					?> 
				<a href="<?php echo get_permalink($post->ID); ?>" class="course-item">
					<?php 
						if (checkIfVisitedPage( $userID, $post->ID )):
					?>
					<span id="completed"></span>
					<?php else: ?>
					<span> </span>
					<?php endif; ?>
					<div><?php echo $post->post_title; ?></div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>