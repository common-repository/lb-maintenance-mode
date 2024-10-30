<?php

/*
 * Plugin Name: LB Maintenance Mode
 * Description: Simple plugin to activate the maintenance mode.
 * Version: 1.0.0
 * Author: Lucas Bacciotti Moreira
 * Author URI: https://profiles.wordpress.org/baciotti/
 * License: GPLv2 or later
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if (!defined('ABSPATH')) {
    die;
}

//=================================================
// Absolute path
//=================================================
define('LB_MAINTENANCE_MODE_PLUGIN_DIR', plugin_dir_path(__FILE__));

//=================================================
// Includes
//=================================================
require_once LB_MAINTENANCE_MODE_PLUGIN_DIR . '/includes/lb_maintenance_mode_scripts.php';
require_once LB_MAINTENANCE_MODE_PLUGIN_DIR . '/includes/lb_maintenance_mode_settings.php';
