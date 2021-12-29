<?php 
	get_header();
	
	$category = get_the_category(get_the_ID())[0];
	
	wp_enqueue_style("h2h-style-post", get_template_directory_uri() . "/assets/css/coursePages.css", $version, "all");
	
	$userID = wp_get_current_user()->id;
	$categoryID = $category->term_id;
	$progress = checkViewedPagesInCategory($userID, $categoryID);

	$args = array( 
		'category' => $categoryID,
		'orderby'  => 'post_date',
		'order'    => 'ASC'
	);
	$posts = get_posts( $args );

	$post_id = $post->ID;
	$ids = array();
	foreach ( $posts as $xpost ) {
		$ids[] = $xpost->ID;
	}
	// get and echo previous and next post in the same category
	$thisindex = array_search( $post_id, $ids );
	$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
	$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;
 ?>

<div class="coursePage">
	<div class="progress-tracker">
		<div class="breadcrumbs">
			<div class="main-title"><?php echo $category->cat_name;?></div>
			<div> > </div>
			<div class="page-title"> <?php echo the_title(); ?></div>
			<?php 
				if (checkIfVisitedPage( $userID, $post->ID )):
			?>
			<div class="tracker complete">COMPLETED</div>
			<?php else: ?>
			<div class="tracker">IN PROGRESS</div>
			<?php endif; ?>
			
		</div>
		<div>
			<div class="bar"><div style="width: <?php echo $progress; ?>%;"></div></div>
			<div class="percentage"><?php echo $progress; ?>% Completed</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="page-title"><?php the_title(); ?></div>
		
		<?php
			get_template_part( 'template-parts/content', 'post' );
		?>
	</div>
	<div class="line"></div>
	<div class="page-footer">
		<?php if ($previd !== false): ?>
			<a href="<?php echo get_permalink($previd); ?>">
			<div class="prev">< PREVIOUS</div>
		<?php endif; ?>
		<div style="visibility: hidden"></div>
		<?php if ($nextid !== false): ?>
			<a href="<?php echo get_permalink($nextid); ?>">
			<div class="next">NEXT ></div>
		<?php endif; ?>
	</div>
</div>
<?php
	get_footer();
?>