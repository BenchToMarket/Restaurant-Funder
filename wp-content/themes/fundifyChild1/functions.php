<?php
/**
 * Fundify functions and definitions
 *
 * @package Fundify
 * @since Fundify 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Fundify 1.0
 */


/* mine.  
from: http://wordpress.org/support/topic/please-help-me-to-remove-the-top-tool-bar-for-suscribers   */

if (!current_user_can('manage_options') ) { show_admin_bar(false); }
