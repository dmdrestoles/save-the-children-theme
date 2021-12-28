<?php /*Template Name: Login*/ ?>
<?php
get_header();

wp_enqueue_style("h2h-style-login", get_template_directory_uri() . "/assets/css/login.css", $version, "all");
$args = array(
    'redirect' => home_url(), 
    'id_username' => 'user',
    'id_password' => 'pass',
	'remember' => false
   );
?>

<div class="login-page">
	<div class="title">Log in</div>

	<?php wp_login_form($args);?>
</div>
<?php get_footer();?>