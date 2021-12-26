<?php 
	get_header();
 ?>

		<article class="content px-3 py-5 p-md-5">
 			<?php 
			 	if ( have_posts() ):
					 while( have_posts() ):
						$category = get_the_category( get_the_ID() )[0];

			?>
				<h3><a href="<?php echo get_category_link( $category->term_id );?>"><?php echo $category->name; ?></a> > <?php the_title(); ?></h3>
			<?php
				the_post();

				the_content();

				endwhile;
			endif;
			 ?>
	    </article>

<?php
	get_footer();
?>