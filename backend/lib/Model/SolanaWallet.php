<?php

/**
 * SolanaWallet Model
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
 * SolanaWallet Model
 */
class SolanaWallet extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaWallet";
    protected static $_definition = [
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic", null, ["r" => 0]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 0]]
    ];

    /**
     * SolanaWallet
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get mnemonic
     *
     * @return string|null
     */
    public function getMnemonic(): ?string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string|null $mnemonic Generated mnemonic for wallet.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMnemonic(?string $mnemonic) {
        return $this->_set("mnemonic", $mnemonic);
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Generated account address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
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
     * @param string|null $private_key Generated private key for account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
