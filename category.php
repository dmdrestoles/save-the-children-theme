<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main">

<?php 
echo wp_get_current_user()->display_name;
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title"><?php single_cat_title(); ?> (<?php echo get_category(get_query_var( 'cat' ))->count; ?>)</h1>
 
</header>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>