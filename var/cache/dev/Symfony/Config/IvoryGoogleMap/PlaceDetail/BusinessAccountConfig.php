<?php

namespace Symfony\Config\IvoryGoogleMap\PlaceDetail;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BusinessAccountConfig 
{
    private $secret;
    private $channel;
    private $clientId;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): self
    {
        $this->_usedProperties['secret'] = true;
        $this->secret = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function channel($value): self
    {
        $this->_usedProperties['channel'] = true;
        $this->channel = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientId($value): self
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('secret', $value)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = $value['secret'];
            unset($value['secret']);
        }

        if (array_key_exists('channel', $value)) {
            $this->_usedProperties['channel'] = true;
            $this->channel = $value['channel'];
            unset($value['channel']);
        }

        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret;
        }
        if (isset($this->_usedProperties['channel'])) {
            $output['channel'] = $this->channel;
        }
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId;
        }

        return $output;
    }

}
