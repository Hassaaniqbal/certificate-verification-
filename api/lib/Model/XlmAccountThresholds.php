<?php

/**
 * XlmAccount_thresholds Model
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
 * XlmAccount_thresholds Model
 * 
 * @description Operations have varying levels of access. This field specifies thresholds for different access levels, as well as the weight of the master key.
 */
class XlmAccountThresholds extends AbstractModel {

    public const _D = null;
    protected static $_name = "XlmAccount_thresholds";
    protected static $_definition = [
        "low_threshold" => ["low_threshold", "float", null, "getLowThreshold", "setLowThreshold", null, ["r" => 0]], 
        "med_threshold" => ["med_threshold", "float", null, "getMedThreshold", "setMedThreshold", null, ["r" => 0]], 
        "high_threshold" => ["high_threshold", "float", null, "getHighThreshold", "setHighThreshold", null, ["r" => 0]]
    ];

    /**
     * XlmAccountThresholds
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get low_threshold
     *
     * @return float|null
     */
    public function getLowThreshold(): ?float {
        return $this->_data["low_threshold"];
    }

    /**
     * Set low_threshold
     * 
     * @param float|null $low_threshold The weight required for a valid transaction including the Allow Trust and Bump Sequence operations.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLowThreshold(?float $low_threshold) {
        return $this->_set("low_threshold", $low_threshold);
    }

    /**
     * Get med_threshold
     *
     * @return float|null
     */
    public function getMedThreshold(): ?float {
        return $this->_data["med_threshold"];
    }

    /**
     * Set med_threshold
     * 
     * @param float|null $med_threshold The weight required for a valid transaction including the Create Account, Payment, Path Payment, Manage Buy Offer, Manage Sell Offer, Create Passive Sell Offer, Change Trust, Inflation, and Manage Data operations.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMedThreshold(?float $med_threshold) {
        return $this->_set("med_threshold", $med_threshold);
    }

    /**
     * Get high_threshold
     *
     * @return float|null
     */
    public function getHighThreshold(): ?float {
        return $this->_data["high_threshold"];
    }

    /**
     * Set high_threshold
     * 
     * @param float|null $high_threshold The weight required for a valid transaction including the Account Merge and Set Options operations.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHighThreshold(?float $high_threshold) {
        return $this->_set("high_threshold", $high_threshold);
    }
}