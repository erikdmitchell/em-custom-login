<?php
/**
 * User activation form template
 *
 * Can be overriden
 *
 * @package PickleCustomLogin
 * @since   1.0.0
 */

?>

<div class="pcl-user-activation">
    <?php if ( pcl_activate_user() ) : ?>
        <div class="success text-center"><p>Account activated. Please click below to login.
            <p><a href="<?php echo esc_html( home_url( '/login/' ) ); ?>" class="btn btn-primary mt-2 mb-4">Login now.</a></p>
    <?php else : ?>
        <div class="pcl-user-activation error text-center"><p>Your account could not be activated. Please try again or contact <a href="mailto:<?php echo esc_html( get_option( 'admin_email' ) ); ?>"><?php echo esc_html( get_option( 'admin_email' ) ); ?></a></p>
    <?php endif; ?>
</div>
