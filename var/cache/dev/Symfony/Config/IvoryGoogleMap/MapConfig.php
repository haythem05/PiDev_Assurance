<?php

namespace Symfony\Config\IvoryGoogleMap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MapConfig 
{
    private $debug;
    private $language;
    private $apiKey;
    private $_usedProperties = [];

    /**
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;

        return $this;
    }

    /**
     * @default '%locale%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function language($value): self
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;

        return $this;
    }

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

    public function __construct(array $value = [])
    {
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }

        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = $value['language'];
            unset($value['language']);
        }

        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }

        return $output;
    }

}
