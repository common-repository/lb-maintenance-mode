<?php
//=================================================
// Settings Page
//=================================================
// bla bla
//=================================================
function lb_maintenance_mode_callback()
{
    $option = rest_sanitize_boolean(get_option('lb_maintenance_mode_option_enabled'));
    $allowed_html = array(
        'input' => array(
            'type' => array(),
            'id' => array(),
            'name' => array(),
            'value' => array(),
            'checked' => array()
        )
    );
    
    $html = '  
        <input
            type="checkbox"
            id="lb_maintenance_mode_option_enabled"
            name="lb_maintenance_mode_option_enabled"
            value="1"'
        . checked(1, $option, false) . ' 
        />
        ';

    echo wp_kses($html, $allowed_html);
}


function lb_maintenance_mode_function()
{
    add_settings_field(
        'lb_maintenance_mode_option_enabled',
        'Enable maintenance mode',
        'lb_maintenance_mode_callback',
        'general');

    register_setting(
        'general',
        'lb_maintenance_mode_option_enabled',
        'bool');
}

function lb_maintenance_mode_function_activate()
{
    $option = get_option('lb_maintenance_mode_option_enabled');
    if ($option && (!current_user_can('edit_themes') || !is_user_logged_in())) {
        wp_die('<h1>We are down for Maintenance</h1><br/>We will be back shortly!');
    }
}

add_action('admin_init', 'lb_maintenance_mode_function');
add_action('get_header', 'lb_maintenance_mode_function_activate');