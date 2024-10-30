<?php
//=================================================
// Scripts Page
//=================================================
// Enqueue CSS and JS/jQuery
// Enqueue Ajax
// Enqueue CSS
//=================================================
add_action('admin_enqueue_scripts', 'lb_maintenance_mode_add_scripts');

function lb_maintenance_mode_add_scripts()
{
    // Styles
    wp_enqueue_style(
        'lb_ajax_certificate',
        plugin_dir_url(__FILE__) . '../css/lb_maintenance_mode_css.css'
    );
}