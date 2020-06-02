<?php 

return [

    /*
    |--------------------------------------------------------------------------
    | WBM Setup
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    // General settings
    'wbm_webshop_id' => env('WBM_WEBSHOP_ID', ''),
    'wbm_url' => env('WBM_URL', ''),
    'wbm_currency' => env('WBM_CURRENCY', '208'),

    // MD5 keys
    'wbm_md5_key_1' => env('WBM_MD5_KEY_1', ''),
    'wbm_md5_key_2' => env('WBM_MD5_KEY_2', ''),

    // Enable payment options
    'wbm_payment_type_creditcard' => true,
    'wbm_payment_type_gln_ean' => true,
    'wbm_payment_type_aau_invoice' => false,

    // Callbacks
    'wbm_payment_callback' => env('WBM_PAYMENT_CALLBACK', ''), // Leave empty for module default

    // Routes
    'wbm_accept_route' => env('WBM_ACCEPT_ROUTE', null),
    'wbm_cancel_route' => env('WBM_CANCEL_ROUTE', null),

    /*
    |--------------------------------------------------------------------------
    | ReceiptService setup
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'wbm_receipt_url' => env('WBM_RECEIPT_URL', ''),
    'wbm_receipt_token' => env('WBM_RECEIPT_TOKEN', ''),
    'wbm_receipt_callback' => env('WBM_RECEIPT_CALLBACK', ''), // Leave empty for module default

];
