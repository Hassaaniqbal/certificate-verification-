<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Eth;
use Tatum\Cryptography\Web3\Net;
use Tatum\Cryptography\Web3\Personal;
use Tatum\Cryptography\Web3\Shh;
use Tatum\Cryptography\Web3\Utils;
use Tatum\Cryptography\Web3\Providers\Provider;
use Tatum\Cryptography\Web3\Providers\HttpProvider;
use Tatum\Cryptography\Web3\RequestManagers\RequestManager;
use Tatum\Cryptography\Web3\RequestManagers\HttpRequestManager;

class Web3 {
    /**
     * provider
     *
     * @var \Tatum\Cryptography\Web3\Providers\Provider
     */
    protected $provider;

    /**
     * eth
     *
     * @var \Tatum\Cryptography\Web3\Eth
     */
    protected $eth;

    /**
     * net
     *
     * @var \Tatum\Cryptography\Web3\Net
     */
    protected $net;

    /**
     * personal
     *
     * @var \Tatum\Cryptography\Web3\Personal
     */
    protected $personal;

    /**
     * shh
     *
     * @var \Tatum\Cryptography\Web3\Shh
     */
    protected $shh;

    /**
     * utils
     *
     * @var \Tatum\Cryptography\Web3\Utils
     */
    protected $utils;

    /**
     * methods
     *
     * @var array
     */
    private $methods = [];

    /**
     * allowedMethods
     *
     * @var array
     */
    private $allowedMethods = ["web3_clientVersion", "web3_sha3"];

    /**
     * construct
     *
     * @param string|\Tatum\Cryptography\Web3\Providers\Provider $provider
     * @return void
     */
    public function __construct($provider) {
        if (is_string($provider) && filter_var($provider, FILTER_VALIDATE_URL) !== false) {
            // check the uri schema
            if (preg_match("/^https?:\/\//", $provider) === 1) {
                $requestManager = new HttpRequestManager($provider);

                $this->provider = new HttpProvider($requestManager);
            }
        } elseif ($provider instanceof Provider) {
            $this->provider = $provider;
        }
    }

    /**
     * call
     *
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call($name, $arguments) {
        if (empty($this->provider)) {
            throw new \RuntimeException("Please set provider first.");
        }

        $class = explode("\\", get_class());

        if (preg_match('/^[a-zA-Z0-9]+$/', $name) === 1) {
            $method = strtolower($class[1]) . "_" . $name;

            if (!in_array($method, $this->allowedMethods)) {
                throw new \RuntimeException("Unallowed rpc method: " . $method);
            }
            if ($this->provider->isBatch) {
                $callback = null;
            } else {
                $callback = array_pop($arguments);

                if (is_callable($callback) !== true) {
                    throw new \InvalidArgumentException("The last param must be callback function.");
                }
            }
            if (!array_key_exists($method, $this->methods)) {
                // new the method
                $methodClass = sprintf("\Tatum\Cryptography\Web3\Methods\%s\%s", ucfirst($class[1]), ucfirst($name));
                $methodObject = new $methodClass($method, $arguments);
                $this->methods[$method] = $methodObject;
            } else {
                $methodObject = $this->methods[$method];
            }
            if ($methodObject->validate($arguments)) {
                $inputs = $methodObject->transform($arguments, $methodObject->inputFormatters);
                $methodObject->arguments = $inputs;
                $this->provider->send($methodObject, $callback);
            }
        }
    }

    /**
     * get
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        $method = "get" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], []);
        }
        return false;
    }

    /**
     * set
     *
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set($name, $value) {
        $method = "set" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], [$value]);
        }
        return false;
    }

    /**
     * getProvider
     *
     * @return \Tatum\Cryptography\Web3\Providers\Provider
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * setProvider
     *
     * @param \Tatum\Cryptography\Web3\Providers\Provider $provider
     * @return bool
     */
    public function setProvider($provider) {
        if ($provider instanceof Provider) {
            $this->provider = $provider;
            return true;
        }
        return false;
    }

    /**
     * getEth
     *
     * @return \Tatum\Cryptography\Web3\Eth
     */
    public function getEth() {
        if (!isset($this->eth)) {
            $eth = new Eth($this->provider);
            $this->eth = $eth;
        }
        return $this->eth;
    }

    /**
     * getNet
     *
     * @return \Tatum\Cryptography\Web3\Net
     */
    public function getNet() {
        if (!isset($this->net)) {
            $net = new Net($this->provider);
            $this->net = $net;
        }
        return $this->net;
    }

    /**
     * getPersonal
     *
     * @return \Tatum\Cryptography\Web3\Personal
     */
    public function getPersonal() {
        if (!isset($this->personal)) {
            $personal = new Personal($this->provider);
            $this->personal = $personal;
        }
        return $this->personal;
    }

    /**
     * getShh
     *
     * @return \Tatum\Cryptography\Web3\Shh
     */
    public function getShh() {
        if (!isset($this->shh)) {
            $shh = new Shh($this->provider);
            $this->shh = $shh;
        }
        return $this->shh;
    }

    /**
     * getUtils
     *
     * @return \Tatum\Cryptography\Web3\Utils
     */
    public function getUtils() {
        if (!isset($this->utils)) {
            $utils = new Utils();
            $this->utils = $utils;
        }
        return $this->utils;
    }

    /**
     * batch
     *
     * @param bool $status
     * @return void
     */
    public function batch($status) {
        $status = is_bool($status);

        $this->provider->batch($status);
    }
}
