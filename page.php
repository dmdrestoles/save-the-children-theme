<?php 
	get_header();
 ?>
		<article class="content px-3 py-5 p-md-5">
			<?php
				the_post();

				get_template_part( 'template-parts/content', 'page' );
			 ?>
	    </article>

<?php
	get_footer();
?>