<?php
const HTTP_BAD_REQUEST = 400;
const HTTP_SERVER_ERR = 500;

function response_success($code, $data){
    return new WP_REST_Response(
        array(
            'success' => true,
            'data' => $data,
        ),
        $code
    );
}
function response_fail($code, $message){
    return new WP_REST_Response(
        array(
            'success' => false,
            'message' => $message
        ),
        $code
    );
}
