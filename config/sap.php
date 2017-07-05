<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 05/07/2017
 * Time: 15:27
 */

use Litiano\Sap\Enum\BoSuppLangs;

return array(
    'username' => env('SAP_USER', 'manager'),
    'password' => env('SAP_PASSWORD', ''),
    'server' => env('SAP_SERVER_ADDRESS', 'localhost'),
    'license_server' => env('SAP_LICENSE_SERVER', 'localhost'),
    'language' => env('SAP_LANGUAGE', BoSuppLangs::ln_Portuguese_Br),
    'db' => array(
        'username' => env('SAP_DB_USER', 'sa'),
        'password' => env('SAP_DB_PASSWORD', ''),
        'port' => env('SAP_SQL_PORT', '1433'),
        'type' => env('SAP_DB_SERVER_TYPE', ''),
        'name' => env('SAP_DB_NAME', ''),
        'host' => env('SAP_DB_HOST', 'localhost')
    )
);