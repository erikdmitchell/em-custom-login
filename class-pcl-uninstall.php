<?php
/**
 * Uninstall class
 *
 * @package PickleCustomLogin
 * @since   1.0.0
 */

/**
 * PCL_Uninstall class.
 */
class PCL_Uninstall {
    /**
     * Uninstall.
     *
     * @access public
     * @static
     * @return void
     */
    public static function uninstall() {
        if ( ! is_blog_installed() ) {
            return;
        }

        // Check if we are not already running this routine.
        if ( 'yes' === get_transient( 'pcl_uninstalling' ) ) {
            return;
        }

        // If we made it till here nothing is running yet, lets set the transient now.
        set_transient( 'pcl_uninstalling', 'yes', MINUTE_IN_SECONDS * 10 );

        self::remove_pages();
        self::remove_version();

        delete_transient( 'pcl_uninstalling' );
    }

    /**
     * Remove pages.
     *
     * @access public
     * @static
     * @return void
     */
    public static function remove_pages() {
        // if no pages exist, bail.
        if ( ! get_option( 'pcl_pages' ) ) {
            return;
        }

        $pages_arr = get_option( 'pcl_pages', array() );

        foreach ( $pages_arr as $slug => $id ) :
            wp_delete_post( $id, true );
        endforeach;

        delete_option( 'pcl_pages' );
    }

    /**
     * Remove version.
     *
     * @access private
     * @static
     * @return void
     */
    private static function remove_version() {
        delete_option( 'pcl_version' );
    }

}
