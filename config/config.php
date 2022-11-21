<?php

if (!defined('PROJECT_PATH')) {
    define('PROJECT_PATH', 'https://sslcommerzphp.local'); // replace this value with your project path
}

if (!defined('IS_SANDBOX')) {
    define('IS_SANDBOX', true); // 'true' for sandbox, 'false' for live
}

if (!defined('STORE_ID')) {
    define('STORE_ID', 'white631394893143b'); // your store id. For sandbox, register at https://developer.sslcommerz.com/registration/
}

if (!defined('STORE_PASSWORD')) {
    define('STORE_PASSWORD', 'white631394893143b@ssl'); // your store password.
}

return [
    'success_url' => 'success.php', // your success url
    'failed_url' => 'fail.php', // your fail url
    'cancel_url' => 'cancel.php', //your cancel url
    'ipn_url' => 'ipn.php', // your ipn url


    'projectPath' => PROJECT_PATH,
    'apiDomain' => IS_SANDBOX ? 'https://sandbox.sslcommerz.com' : 'https://securepay.sslcommerz.com',
    'apiCredentials' => [
        'store_id' => STORE_ID,
        'store_password' => STORE_PASSWORD,
    ],
    'apiUrl' => [
        'make_payment' => "/gwprocess/v4/api.php",
        'order_validate' => "/validator/api/validationserverAPI.php",
    ],
    'connect_from_localhost' => false,
    'verify_hash' => true,
];