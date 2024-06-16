<?php

/**
 * CustodialManagedAddress Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * CustodialManagedAddress Model
 */
class CustodialManagedAddress extends AbstractModel {

    public const _D = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_SOL = 'SOL';
    public const CHAIN_LTC = 'LTC';
    public const CHAIN_BTC = 'BTC';
    protected static $_name = "CustodialManagedAddress";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "wallet_id" => ["walletId", "string", 'uuid', "getWalletId", "setWalletId", null, ["r" => 1]], 
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 0]]
    ];

    /**
     * CustodialManagedAddress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_BSC,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_ONE,
            self::CHAIN_CELO,
            self::CHAIN_MATIC,
            self::CHAIN_SOL,
            self::CHAIN_LTC,
            self::CHAIN_BTC,
        ];
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Blockchain address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get wallet_id
     *
     * @return string
     */
    public function getWalletId(): string {
        return $this->_data["wallet_id"];
    }

    /**
     * Set wallet_id
     * 
     * @param string $wallet_id Unique identifier of the managed address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setWalletId(string $wallet_id) {
        return $this->_set("wallet_id", $wallet_id);
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain of the address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get private_key
     *
     * @return string|null
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string|null $private_key Private key of the address. Not present by default.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
