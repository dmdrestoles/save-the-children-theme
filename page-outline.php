<?php /*Template Name: Course Outline*/ ?>

<?php 
wp_enqueue_style("h2h-style-outline", get_template_directory_uri() . "/assets/css/courseOutline.css", $version, "all");
get_header(); 

?>

<div class="courseOutline">
	<div class="returnToDashboard">
		<a class="back">
			<img src="images/back.png">
			<div>Return to Dashboard</div>
		</a>
	</div>
	<div class="outline-content">
		<div class="session">
			<div>
				<div class="session-container"></div>
				<div class="details">
					<div class="session-number">Introduksyon</div>
					<div class="session-title">Road to Positive Parenting</div>
				</div>
			</div>
			<div class="progress">
				<div class="bar"><div style="width: 20%;"></div></div><!-- change value of width here for progress bar completion -->
				<div class="percentage">20% Complete</div> <!-- numerical value here should besame with width above -->
			</div>
		</div>
		<div class="outline">
			<div class="title">COURSE OUTLINE</div>
			<div>
				<a href="#" class="course-item">
					<span id="completed"></span>
					<div>Makakatulong na tips para sa facilitator #1</div>
				</a>
				<a href="#" class="course-item">
					<span></span>
					<div>Makakatulong na tips para sa facilitator #2</div>
				</a>
				<a href="#" class="course-item">
					<span></span>
					<div>Makakatulong na tips para sa facilitator #3</div>
				</a>
				<a href="#" class="course-item">
					<span></span>
					<div>Heart to HEART (H2H) Orientation and Launching</div>
				</a>
				<a href="#" class="course-item">
					<span></span>
					<div>Heart to HEART (H2H) Six Sessions</div>
				</a>
			</div>
		</div>
	</div>
</div>