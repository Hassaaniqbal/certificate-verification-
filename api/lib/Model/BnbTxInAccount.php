<?php

/**
 * BnbTxInAccount Model
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
 * BnbTxInAccount Model
 */
class BnbTxInAccount extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbTxInAccount";
    protected static $_definition = [
        "total" => ["total", "float", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "tx" => ["tx", "\Tatum\Model\BnbTransaction[]", null, "getTx", "setTx", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * BnbTxInAccount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get total
     *
     * @return float|null
     */
    public function getTotal(): ?float {
        return $this->_data["total"];
    }

    /**
     * Set total
     * 
     * @param float|null $total total
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal(?float $total) {
        return $this->_set("total", $total);
    }

    /**
     * Get tx
     *
     * @return \Tatum\Model\BnbTransaction[]|null
     */
    public function getTx(): ?array {
        return $this->_data["tx"];
    }

    /**
     * Set tx
     * 
     * @param \Tatum\Model\BnbTransaction[]|null $tx tx
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTx(?array $tx) {
        return $this->_set("tx", $tx);
    }
}
