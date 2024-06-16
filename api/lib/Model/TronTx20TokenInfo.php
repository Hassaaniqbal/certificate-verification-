<?php

/**
 * TronTx20_tokenInfo Model
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
 * TronTx20_tokenInfo Model
 */
class TronTx20TokenInfo extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronTx20_tokenInfo";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 1]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals", null, ["r" => 1]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1]]
    ];

    /**
     * TronTx20TokenInfo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol symbol
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(string $symbol) {
        return $this->_set("symbol", $symbol);
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
     * @param string $address address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get decimals
     *
     * @return float
     */
    public function getDecimals(): float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float $decimals decimals
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDecimals(float $decimals) {
        return $this->_set("decimals", $decimals);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }
}
