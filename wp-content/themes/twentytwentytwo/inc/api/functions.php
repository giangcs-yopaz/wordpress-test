<?php
add_action('rest_api_init', 'register_api');

function register_api() {
    register_rest_route('wp/v2', '/custom-subscriber', array(
        'methods' => 'POST',
        'callback' => 'create_custom_subscriber',
    ));
}

function create_custom_subscriber($request)
{
    $email = $request['email'];

    if (!is_email($email)) {
        return response_fail(HTTP_BAD_REQUEST, 'Wrong email syntax');
    }

    if (email_exists($email)) {
        return response_fail(HTTP_BAD_REQUEST, 'Email Exists');
    }

    $new_user_id = wp_insert_user( array(
        'user_login' => strstr($email, '@', true),
        'user_email' => $email,
        'first_name' => $request['first_name'],
        'last_name' => $request['last_name'],
        'role' => ROLE_CUSTOM_SUBSCRIBER,
        'meta_input' => array(
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'zip' => $request['zip'],
            'phone' => $request['phone'],
            'birthdate' => $request['birthdate'],
        ),
    ) );

    if (!is_wp_error($new_user_id)) {
        return response_success(HTTP_SERVER_ERR, 'New user created with ID ' . $new_user_id);
    } else {
        return response_fail(HTTP_SERVER_ERR, $new_user_id);
    }
}
