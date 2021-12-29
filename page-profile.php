<?php
/**
 * Template Name: User Profile
 *
 * Allow users to update their profiles from Frontend.
 *
 */

wp_enqueue_style("h2h-style-profile", get_template_directory_uri() . "/assets/css/myAccount.css", $version, "all");
/* Get user info. */
global $current_user, $wp_roles;
//get_currentuserinfo(); //deprecated since 3.1

/* Load the registration file. */
//require_once( ABSPATH . WPINC . '/registration.php' ); //deprecated since 3.1
$error = array();    
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

    /* Update user password. */
    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
        if ( $_POST['pass1'] == $_POST['pass2'] )
            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
        else
            $error[] = __('The passwords you entered do not match.  Your password was not updated.', 'profile');
    }

    /* Update user information. */
    if ( !empty( $_POST['url'] ) )
        wp_update_user( array( 'ID' => $current_user->ID, 'user_url' => esc_url( $_POST['url'] ) ) );
    if ( !empty( $_POST['email'] ) ){
        if (!is_email(esc_attr( $_POST['email'] )))
            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->id )
            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
        else{
            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
        }
    }

    if ( !empty( $_POST['first-name'] ) )
        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
    if ( !empty( $_POST['last-name'] ) )
        update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );

    /* Redirect so the page will show updated info.*/
  /*I am not Author of this Code- i dont know why but it worked for me after changing below line to if ( count($error) == 0 ){ */
    if ( count($error) == 0 ) {
        //action hook for plugins and extra fields saving
        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( get_permalink() );
        exit;
    }
}

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="myAccount">
		<div class="title">My Account</div>

        <div class="entry-content entry myAccount-container">
            <?php the_content(); ?>
            <?php if ( !is_user_logged_in() ) : ?>
                    <p class="warning">
                        <?php _e('You must be logged in to edit your profile.', 'profile'); ?>
                    </p><!-- .warning -->
            <?php else : ?>
				<div class="sidebar">
				<?php if (is_user_logged_in()): ?>
					<div class="header">Hello, <?php echo wp_get_current_user()->first_name; ?>!</div>
					<div class="options">
						<a href="<?php echo get_home_url(); ?>/my-account" style="color: #DA291C">My Account</a>
						<a href="#">Help</a>
						<a href="<?php echo wp_logout_url(); ?>">Logout</a>
					</div>
					<?php endif; ?>
				</div>
				<div class="myAccount-content">
					<div>
						<div class="title">PROFILE DETAILS</div>
						<div class="line"></div>
						<div class="main-container">
							<form method="post" class="profile-container" id="adduser" action="<?php the_permalink(); ?>">
								<div class="profile-pic"><img src="<?php bloginfo('template_url'); ?>/assets/images/pfp.png"></div>
								<div>
									<div class="profile-info">
										<p class="form-username">
											<label for="first-name" class="first-name"><?php _e('First Name', 'profile'); ?></label></br>
											<input class="text-input first-name-input" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
										</p><!-- .form-username -->
										<p class="form-username">
											<label for="last-name" class="last-name"><?php _e('Last Name', 'profile'); ?></label></br>
											<input class="text-input last-name-input" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
										</p><!-- .form-username -->
										<p class="form-email">
											<label for="email" class="email"><?php _e('E-mail *', 'profile'); ?></label></br>
											<input class="text-input email-input" name="email" type="text" id="email" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" />
										</p><!-- .form-email -->
									</div>
								</div>
								<div>
									<div class="title">CHANGE PASSWORD</div>
									<div class="line"></div>
									<div class="change-pw-container">
										<p class="form-password">
											<label for="pass1" class="newPass"><?php _e('Password *', 'profile'); ?> </label>
											<input class="text-input newPass" name="pass1" type="password" id="pass1" />
										</p><!-- .form-password -->
										<p class="form-password">
											<label for="pass2" class="confirmPass"><?php _e('Repeat Password *', 'profile'); ?></label>
											<input class="text-input confirmPass" name="pass2" type="password" id="pass2" />
										</p><!-- .form-password -->

										<?php 
											//action hook for plugin and extra fields
											do_action('edit_user_profile',$current_user); 
										?>
										<p class="form-submit">
											<?php echo $referer; ?>
											<input name="updateuser" type="submit" id="updateuser" class="submit button saveChanges" value="<?php _e('SAVE CHANGES', 'profile'); ?>" />
											<?php wp_nonce_field( 'update-user' ) ?>
											<input name="action" type="hidden" id="action" value="update-user" />
										</p><!-- .form-submit -->
									</div>
								</div>
							</form><!-- #adduser -->
						</div>
						
						<!-- Modal -->
						<div class="modal-container" id="modal-background">
						  
						</div>
						<div class="modal" id="modal">
							<div class="modal-header">
								<div>Reminder</div>
							</div>
							<div class="modal-content">
								<div>
									<?php if ( count($error) > 0 ) echo '<p class="error">' . implode("<br />", $error) . '</p>'; ?>
									<?php if ( count($error) <= 0  ) echo '<p class="success">' . implode("<br />", $error) . '</p>'; ?>
								</div>
							</div>
							<div class="modal-footer">
								<button class="close">OK</button>
							</div>
						</div>
						
						<!-- Just edit the script pls -->
						<script>
							$("#saveChanges").click(function(){
								$("#modal-background").css("display","block");
								$("#modal").css("display","block");
								$("body").css("overflow","hidden");
							});


							$(".close").click(function(){
								$("#modal-background").fadeOut();
								$("#modal").fadeOut();
								$("body").css("overflow","visible");
							});
						</script>
					</div>
				</div>
            <?php endif; ?>
        </div><!-- .entry-content -->
    </div><!-- .hentry .post -->
    <?php endwhile; ?>
<?php else: ?>
    <p class="no-data">
        <?php _e('Sorry, no page matched your criteria.', 'profile'); ?>
    </p><!-- .no-data -->
<?php endif; ?>
<?php get_footer(); ?>