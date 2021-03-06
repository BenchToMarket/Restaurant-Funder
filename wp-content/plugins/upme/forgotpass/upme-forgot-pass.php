<?php

// Adding AJAX action for logged in and guest both.
add_action( 'wp_ajax_request_password', 'request_new_pass' );
add_action( 'wp_ajax_nopriv_request_password', 'request_new_pass' );


function request_new_pass()
{
    global $wpdb, $current_site,$wp_hasher;
    if ( strpos( $_POST['user_details'], '@' ) ) 
    {
            $user_data = get_user_by( 'email', trim( $_POST['user_details'] ) );
            if ( empty( $user_data ) )
            {
                echo "invalid_email";
                die;
            }   
    } 
    else 
    {
            $login = trim($_POST['user_details']);
            $user_data = get_user_by('login', $login);
    }
    
    
    
    if ( !$user_data ) 
    {
        echo "invalid";
        die;
    }

    
    // redefining user_login ensures we return the right case in the email
    $user_login = $user_data->user_login;
    $user_email = $user_data->user_email;
    
    do_action('retreive_password', $user_login);  // Misspelled and deprecated
    do_action('retrieve_password', $user_login);
    
    
    $allow = apply_filters('allow_password_reset', true, $user_data->ID);
    
    if ( ! $allow )
    {
        echo "not_allowed"; die;
    }
    
    
    
        // Generate something random for a key...
        $key = wp_generate_password(20, false);
        do_action('retrieve_password_key', $user_login, $key);

    // Set upme reset password key for validation in reset password form
    $reset_pass_key = $key;
    update_user_meta($user_data->ID, 'upme_reset_pass_key', $key);


    $current_option = get_option('upme_options');
    $reset_page_url = get_permalink($current_option['reset_password_page_id']);

    $query_str = 'action=upme_reset_pass&key=' .$reset_pass_key. '&login=' . rawurlencode($user_login);
    $reset_page_url = upme_add_query_string($reset_page_url,$query_str);
    
    $message = __('Someone requested that the password be reset for the following account:') . "\r\n\r\n";
    $message .= network_home_url( '/' ) . "\r\n\r\n";
    $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
    $message .= __('If this was a mistake, just ignore this email and nothing will happen.') . "\r\n\r\n";
    $message .= __('To reset your password, visit the following address:') . "\r\n\r\n";
    $message .= '<'. $reset_page_url .'>';
  
    if ( is_multisite() )
        $blogname = $GLOBALS['current_site']->site_name;
    else
    // The blogname option is escaped with esc_html on the way into the database in sanitize_option
    // we want to reverse this for the plain text arena of emails.
        $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
    
    $title = sprintf( __('[%s] Password Reset'), $blogname );
    
    $title = apply_filters('retrieve_password_title', $title);
    $message = apply_filters('retrieve_password_message', $message, $key);


    if ( $message && !wp_mail($user_email, $title, $message) )
    {
        echo "mail_error"; die;
    }
        
    
    echo "success"; die;    
    
    
}

