<?php
const ROLE_CUSTOM_SUBSCRIBER = 'custom_subscriber';

add_action('init', 'add_custom_roles');
function add_custom_roles() {
    add_role(ROLE_CUSTOM_SUBSCRIBER, 'Custom Subscriber', array(
        'read' => true,
    ));
}
