<?php

namespace Symfony\Config\IvoryGoogleMap;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PlacePhoto'.\DIRECTORY_SEPARATOR.'BusinessAccountConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PlacePhotoConfig 
{
    private $apiKey;
    private $businessAccount;
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

    public function businessAccount(array $value = []): \Symfony\Config\IvoryGoogleMap\PlacePhoto\BusinessAccountConfig
    {
        if (null === $this->businessAccount) {
            $this->_usedProperties['businessAccount'] = true;
            $this->businessAccount = new \Symfony\Config\IvoryGoogleMap\PlacePhoto\BusinessAccountConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "businessAccount()" has already been initialized. You cannot pass values the second time you call businessAccount().');
        }

        return $this->businessAccount;
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
            $this->businessAccount = new \Symfony\Config\IvoryGoogleMap\PlacePhoto\BusinessAccountConfig($value['business_account']);
            unset($value['business_account']);
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

        return $output;
    }

}
