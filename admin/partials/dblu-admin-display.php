<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://blubirdinteractive.com
 * @since      1.0.0
 *
 * @package    Dblu
 * @subpackage Dblu/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
if (!is_writable(ABSPATH)) {
    echo "The root directory is not writable";
} else {
    echo "The root directory is writable";
}