<?php

/**
 * BatchCreateTransaction Model
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
 * BatchCreateTransaction Model
 */
class BatchCreateTransaction extends AbstractModel {

    public const _D = null;
    protected static $_name = "BatchCreateTransaction";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "transaction" => ["transaction", "\Tatum\Model\BatchCreateTransactionTransactionInner[]", null, "getTransaction", "setTransaction", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * BatchCreateTransaction
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get sender_account_id
     *
     * @return string
     */
    public function getSenderAccountId(): string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Internal sender account ID within Tatum platform
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        return $this->_set("sender_account_id", $sender_account_id);
    }

    /**
     * Get transaction
     *
     * @return \Tatum\Model\BatchCreateTransactionTransactionInner[]|null
     */
    public function getTransaction(): ?array {
        return $this->_data["transaction"];
    }

    /**
     * Set transaction
     * 
     * @param \Tatum\Model\BatchCreateTransactionTransactionInner[]|null $transaction Array of block seals.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransaction(?array $transaction) {
        return $this->_set("transaction", $transaction);
    }
}
