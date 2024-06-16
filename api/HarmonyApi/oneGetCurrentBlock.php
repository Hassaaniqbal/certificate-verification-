<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/HarmonyApi/#onegetcurrentblock
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

try {

    /**
     * GET /v3/one/block/current
     * 
     * @var \Tatum\Model\OneBlockCurrent[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->oneGetCurrentBlock();

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->harmony()->oneGetCurrentBlock(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->harmony()->oneGetCurrentBlock(): %s\n", 
        $exc->getMessage()
    );
}