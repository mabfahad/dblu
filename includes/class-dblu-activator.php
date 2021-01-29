<?php

/**
 * Fired during plugin activation
 *
 * @link       https://blubirdinteractive.com
 * @since      1.0.0
 *
 * @package    Dblu
 * @subpackage Dblu/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Dblu
 * @subpackage Dblu/includes
 * @author     Blubird Interactive Ltd <info@blubirdinteractive.com>
 */
class Dblu_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        if (is_writable(ABSPATH)) :
            return mkdir(DBLU_DIRECTORY, 755);
        else:
            wp_die( 'The root path of the site is not writable.<br><a href="'.admin_url('plugins.php').'">Back to plugins page</a>' );

        endif;
	}

}
