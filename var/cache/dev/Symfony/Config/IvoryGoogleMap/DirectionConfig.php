<?php

namespace Symfony\Config\IvoryGoogleMap;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Direction'.\DIRECTORY_SEPARATOR.'BusinessAccountConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DirectionConfig 
{
    private $apiKey;
    private $businessAccount;
    private $client;
    private $messageFactory;
    private $format;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): self
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    public function businessAccount(array $value = []): \Symfony\Config\IvoryGoogleMap\Direction\BusinessAccountConfig
    {
        if (null === $this->businessAccount) {
            $this->_usedProperties['businessAccount'] = true;
            $this->businessAccount = new \Symfony\Config\IvoryGoogleMap\Direction\BusinessAccountConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "businessAccount()" has already been initialized. You cannot pass values the second time you call businessAccount().');
        }

        return $this->businessAccount;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): self
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageFactory($value): self
    {
        $this->_usedProperties['messageFactory'] = true;
        $this->messageFactory = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function format($value): self
    {
        $this->_usedProperties['format'] = true;
        $this->format = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('business_account', $value)) {
            $this->_usedProperties['businessAccount'] = true;
            $this->businessAccount = new \Symfony\Config\IvoryGoogleMap\Direction\BusinessAccountConfig($value['business_account']);
            unset($value['business_account']);
        }

        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }

        if (array_key_exists('message_factory', $value)) {
            $this->_usedProperties['messageFactory'] = true;
            $this->messageFactory = $value['message_factory'];
            unset($value['message_factory']);
        }

        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['businessAccount'])) {
            $output['business_account'] = $this->businessAccount->toArray();
        }
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['messageFactory'])) {
            $output['message_factory'] = $this->messageFactory;
        }
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }

        return $output;
    }

}
