<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#callcelosmartcontractmethodkms
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

$arg_call_celo_smart_contract_method_kms = (new \Tatum\Model\CallCeloSmartContractMethodKMS())
    
    // The address of the smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            'null'
        )
    )
    
    // Parameters of the method to be invoked.
    ->setParams(["0x632"])
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Nonce to be set to transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) \Tatum\Model\DeployErc20Fee
    ->setFee(null)
    
    // Currency to pay for transaction gas
    ->setFeeCurrency('null');

try {

    /**
     * POST /v3/celo/smartcontract
     * 
     * @var \Tatum\Model\CallSmartContractMethod200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->callCeloSmartContractMethodKMS($arg_call_celo_smart_contract_method_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->callCeloSmartContractMethodKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->callCeloSmartContractMethodKMS(): %s\n", 
        $exc->getMessage()
    );
}