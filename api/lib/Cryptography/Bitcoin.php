<?php

namespace Tatum\Cryptography;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Chain\Params;
use Tatum\Cryptography\Chain\ParamsInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcAdapterFactory;
use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Ecc\EccFactory;
use Tatum\Cryptography\Ecc\Primitives\GeneratorPoint;

class Bitcoin {
    /**
     * @var NetworkInterface
     */
    private static $network;

    /**
     * @var EcAdapterInterface
     */
    private static $adapter;

    /**
     * @var ParamsInterface
     */
    private static $params;

    /**
     * @return Math
     */
    public static function getMath() {
        return new Math();
    }

    /**
     * Load the generator to be used throughout
     */
    public static function getGenerator() {
        return EccFactory::getSecgCurves(self::getMath())->generator256k1();
    }

    /**
     * @param Math $math
     * @param GeneratorPoint $generator
     * @return EcAdapterInterface
     */
    public static function getEcAdapter(Math $math = null, GeneratorPoint $generator = null) {
        if (null === self::$adapter) {
            self::$adapter = EcAdapterFactory::getAdapter($math ?: self::getMath(), $generator ?: self::getGenerator());
        }

        return self::$adapter;
    }

    /**
     * @param ParamsInterface $params
     */
    public static function setParams(ParamsInterface $params) {
        self::$params = $params;
    }

    /**
     * @return ParamsInterface
     */
    public static function getParams() {
        if (null === self::$params) {
            self::$params = self::getDefaultParams();
        }

        return self::$params;
    }

    /**
     * @param Math|null $math
     * @return ParamsInterface
     */
    public static function getDefaultParams(Math $math = null) {
        return new Params($math ?: self::getMath());
    }

    /**
     * @param EcAdapterInterface $adapter
     */
    public static function setAdapter(EcAdapterInterface $adapter) {
        self::$adapter = $adapter;
    }

    /**
     * @param NetworkInterface $network
     */
    public static function setNetwork(NetworkInterface $network) {
        self::$network = $network;
    }

    /**
     * @return NetworkInterface
     */
    public static function getNetwork() {
        if (null === self::$network) {
            self::$network = self::getDefaultNetwork();
        }

        return self::$network;
    }

    /**
     * @return NetworkInterface
     */
    public static function getDefaultNetwork() {
        return NetworkFactory::bitcoin();
    }
}
