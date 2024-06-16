<?php

/**
 * KcsBlock Model
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
 * KcsBlock Model
 */
class KcsBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "KcsBlock";
    protected static $_definition = [
        "difficulty" => ["difficulty", "string", null, "getDifficulty", "setDifficulty", null, ["r" => 0]], 
        "extra_data" => ["extraData", "string", null, "getExtraData", "setExtraData", null, ["r" => 0]], 
        "gas_limit" => ["gasLimit", "float", null, "getGasLimit", "setGasLimit", null, ["r" => 0]], 
        "gas_used" => ["gasUsed", "float", null, "getGasUsed", "setGasUsed", null, ["r" => 0]], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "logs_bloom" => ["logsBloom", "string", null, "getLogsBloom", "setLogsBloom", null, ["r" => 0]], 
        "miner" => ["miner", "string", null, "getMiner", "setMiner", null, ["r" => 0]], 
        "mix_hash" => ["mixHash", "string", null, "getMixHash", "setMixHash", null, ["r" => 0]], 
        "nonce" => ["nonce", "string", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "number" => ["number", "float", null, "getNumber", "setNumber", null, ["r" => 0]], 
        "parent_hash" => ["parentHash", "string", null, "getParentHash", "setParentHash", null, ["r" => 0]], 
        "receipts_root" => ["receiptsRoot", "string", null, "getReceiptsRoot", "setReceiptsRoot", null, ["r" => 0]], 
        "sha3_uncles" => ["sha3Uncles", "string", null, "getSha3Uncles", "setSha3Uncles", null, ["r" => 0]], 
        "size" => ["size", "float", null, "getSize", "setSize", null, ["r" => 0]], 
        "state_root" => ["stateRoot", "string", null, "getStateRoot", "setStateRoot", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "total_difficulty" => ["totalDifficulty", "string", null, "getTotalDifficulty", "setTotalDifficulty", null, ["r" => 0]], 
        "transactions" => ["transactions", "\Tatum\Model\KcsTx[]", null, "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]], 
        "transactions_root" => ["transactionsRoot", "string", null, "getTransactionsRoot", "setTransactionsRoot", null, ["r" => 0]]
    ];

    /**
     * KcsBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get difficulty
     *
     * @return string|null
     */
    public function getDifficulty(): ?string {
        return $this->_data["difficulty"];
    }

    /**
     * Set difficulty
     * 
     * @param string|null $difficulty Difficulty for this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDifficulty(?string $difficulty) {
        return $this->_set("difficulty", $difficulty);
    }

    /**
     * Get extra_data
     *
     * @return string|null
     */
    public function getExtraData(): ?string {
        return $this->_data["extra_data"];
    }

    /**
     * Set extra_data
     * 
     * @param string|null $extra_data The 'extra data' field of this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExtraData(?string $extra_data) {
        return $this->_set("extra_data", $extra_data);
    }

    /**
     * Get gas_limit
     *
     * @return float|null
     */
    public function getGasLimit(): ?float {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param float|null $gas_limit The maximum gas allowed in this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasLimit(?float $gas_limit) {
        return $this->_set("gas_limit", $gas_limit);
    }

    /**
     * Get gas_used
     *
     * @return float|null
     */
    public function getGasUsed(): ?float {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param float|null $gas_used The total used gas by all transactions in this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasUsed(?float $gas_used) {
        return $this->_set("gas_used", $gas_used);
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Hash of the block. 'null' when its pending block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get logs_bloom
     *
     * @return string|null
     */
    public function getLogsBloom(): ?string {
        return $this->_data["logs_bloom"];
    }

    /**
     * Set logs_bloom
     * 
     * @param string|null $logs_bloom The bloom filter for the logs of the block. 'null' when its pending block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLogsBloom(?string $logs_bloom) {
        return $this->_set("logs_bloom", $logs_bloom);
    }

    /**
     * Get miner
     *
     * @return string|null
     */
    public function getMiner(): ?string {
        return $this->_data["miner"];
    }

    /**
     * Set miner
     * 
     * @param string|null $miner The address of the beneficiary to whom the mining rewards were given.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMiner(?string $miner) {
        return $this->_set("miner", $miner);
    }

    /**
     * Get mix_hash
     *
     * @return string|null
     */
    public function getMixHash(): ?string {
        return $this->_data["mix_hash"];
    }

    /**
     * Set mix_hash
     * 
     * @param string|null $mix_hash 
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMixHash(?string $mix_hash) {
        return $this->_set("mix_hash", $mix_hash);
    }

    /**
     * Get nonce
     *
     * @return string|null
     */
    public function getNonce(): ?string {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param string|null $nonce Hash of the generated proof-of-work. 'null' when its pending block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?string $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number The block number. 'null' when its pending block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumber(?float $number) {
        return $this->_set("number", $number);
    }

    /**
     * Get parent_hash
     *
     * @return string|null
     */
    public function getParentHash(): ?string {
        return $this->_data["parent_hash"];
    }

    /**
     * Set parent_hash
     * 
     * @param string|null $parent_hash Hash of the parent block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParentHash(?string $parent_hash) {
        return $this->_set("parent_hash", $parent_hash);
    }

    /**
     * Get receipts_root
     *
     * @return string|null
     */
    public function getReceiptsRoot(): ?string {
        return $this->_data["receipts_root"];
    }

    /**
     * Set receipts_root
     * 
     * @param string|null $receipts_root 
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReceiptsRoot(?string $receipts_root) {
        return $this->_set("receipts_root", $receipts_root);
    }

    /**
     * Get sha3_uncles
     *
     * @return string|null
     */
    public function getSha3Uncles(): ?string {
        return $this->_data["sha3_uncles"];
    }

    /**
     * Set sha3_uncles
     * 
     * @param string|null $sha3_uncles SHA3 of the uncles data in the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSha3Uncles(?string $sha3_uncles) {
        return $this->_set("sha3_uncles", $sha3_uncles);
    }

    /**
     * Get size
     *
     * @return float|null
     */
    public function getSize(): ?float {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param float|null $size The size of this block in bytes.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSize(?float $size) {
        return $this->_set("size", $size);
    }

    /**
     * Get state_root
     *
     * @return string|null
     */
    public function getStateRoot(): ?string {
        return $this->_data["state_root"];
    }

    /**
     * Set state_root
     * 
     * @param string|null $state_root The root of the final state trie of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStateRoot(?string $state_root) {
        return $this->_set("state_root", $state_root);
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp The unix timestamp for when the block was collated.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get total_difficulty
     *
     * @return string|null
     */
    public function getTotalDifficulty(): ?string {
        return $this->_data["total_difficulty"];
    }

    /**
     * Set total_difficulty
     * 
     * @param string|null $total_difficulty Total difficulty of the chain until this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotalDifficulty(?string $total_difficulty) {
        return $this->_set("total_difficulty", $total_difficulty);
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\KcsTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\KcsTx[]|null $transactions Array of transactions.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }

    /**
     * Get transactions_root
     *
     * @return string|null
     */
    public function getTransactionsRoot(): ?string {
        return $this->_data["transactions_root"];
    }

    /**
     * Set transactions_root
     * 
     * @param string|null $transactions_root The root of the transaction trie of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionsRoot(?string $transactions_root) {
        return $this->_set("transactions_root", $transactions_root);
    }
}
