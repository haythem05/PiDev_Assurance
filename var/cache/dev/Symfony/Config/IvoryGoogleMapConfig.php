<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'MapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'StaticMapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'DirectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'DistanceMatrixConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'ElevationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'GeocoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'PlaceAutocompleteConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'PlaceDetailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'PlacePhotoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'PlaceSearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'IvoryGoogleMap'.\DIRECTORY_SEPARATOR.'TimeZoneConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IvoryGoogleMapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $map;
    private $staticMap;
    private $direction;
    private $distanceMatrix;
    private $elevation;
    private $geocoder;
    private $placeAutocomplete;
    private $placeDetail;
    private $placePhoto;
    private $placeSearch;
    private $timeZone;
    private $_usedProperties = [];

    public function map(array $value = []): \Symfony\Config\IvoryGoogleMap\MapConfig
    {
        if (null === $this->map) {
            $this->_usedProperties['map'] = true;
            $this->map = new \Symfony\Config\IvoryGoogleMap\MapConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "map()" has already been initialized. You cannot pass values the second time you call map().');
        }

        return $this->map;
    }

    public function staticMap(array $value = []): \Symfony\Config\IvoryGoogleMap\StaticMapConfig
    {
        if (null === $this->staticMap) {
            $this->_usedProperties['staticMap'] = true;
            $this->staticMap = new \Symfony\Config\IvoryGoogleMap\StaticMapConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "staticMap()" has already been initialized. You cannot pass values the second time you call staticMap().');
        }

        return $this->staticMap;
    }

    public function direction(array $value = []): \Symfony\Config\IvoryGoogleMap\DirectionConfig
    {
        if (null === $this->direction) {
            $this->_usedProperties['direction'] = true;
            $this->direction = new \Symfony\Config\IvoryGoogleMap\DirectionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "direction()" has already been initialized. You cannot pass values the second time you call direction().');
        }

        return $this->direction;
    }

    public function distanceMatrix(array $value = []): \Symfony\Config\IvoryGoogleMap\DistanceMatrixConfig
    {
        if (null === $this->distanceMatrix) {
            $this->_usedProperties['distanceMatrix'] = true;
            $this->distanceMatrix = new \Symfony\Config\IvoryGoogleMap\DistanceMatrixConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "distanceMatrix()" has already been initialized. You cannot pass values the second time you call distanceMatrix().');
        }

        return $this->distanceMatrix;
    }

    public function elevation(array $value = []): \Symfony\Config\IvoryGoogleMap\ElevationConfig
    {
        if (null === $this->elevation) {
            $this->_usedProperties['elevation'] = true;
            $this->elevation = new \Symfony\Config\IvoryGoogleMap\ElevationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "elevation()" has already been initialized. You cannot pass values the second time you call elevation().');
        }

        return $this->elevation;
    }

    public function geocoder(array $value = []): \Symfony\Config\IvoryGoogleMap\GeocoderConfig
    {
        if (null === $this->geocoder) {
            $this->_usedProperties['geocoder'] = true;
            $this->geocoder = new \Symfony\Config\IvoryGoogleMap\GeocoderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "geocoder()" has already been initialized. You cannot pass values the second time you call geocoder().');
        }

        return $this->geocoder;
    }

    public function placeAutocomplete(array $value = []): \Symfony\Config\IvoryGoogleMap\PlaceAutocompleteConfig
    {
        if (null === $this->placeAutocomplete) {
            $this->_usedProperties['placeAutocomplete'] = true;
            $this->placeAutocomplete = new \Symfony\Config\IvoryGoogleMap\PlaceAutocompleteConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "placeAutocomplete()" has already been initialized. You cannot pass values the second time you call placeAutocomplete().');
        }

        return $this->placeAutocomplete;
    }

    public function placeDetail(array $value = []): \Symfony\Config\IvoryGoogleMap\PlaceDetailConfig
    {
        if (null === $this->placeDetail) {
            $this->_usedProperties['placeDetail'] = true;
            $this->placeDetail = new \Symfony\Config\IvoryGoogleMap\PlaceDetailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "placeDetail()" has already been initialized. You cannot pass values the second time you call placeDetail().');
        }

        return $this->placeDetail;
    }

    /**
     * @return \Symfony\Config\IvoryGoogleMap\PlacePhotoConfig|$this
     */
    public function placePhoto($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['placePhoto'] = true;
            $this->placePhoto = $value;

            return $this;
        }

        if (!$this->placePhoto instanceof \Symfony\Config\IvoryGoogleMap\PlacePhotoConfig) {
            $this->_usedProperties['placePhoto'] = true;
            $this->placePhoto = new \Symfony\Config\IvoryGoogleMap\PlacePhotoConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "placePhoto()" has already been initialized. You cannot pass values the second time you call placePhoto().');
        }

        return $this->placePhoto;
    }

    public function placeSearch(array $value = []): \Symfony\Config\IvoryGoogleMap\PlaceSearchConfig
    {
        if (null === $this->placeSearch) {
            $this->_usedProperties['placeSearch'] = true;
            $this->placeSearch = new \Symfony\Config\IvoryGoogleMap\PlaceSearchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "placeSearch()" has already been initialized. You cannot pass values the second time you call placeSearch().');
        }

        return $this->placeSearch;
    }

    public function timeZone(array $value = []): \Symfony\Config\IvoryGoogleMap\TimeZoneConfig
    {
        if (null === $this->timeZone) {
            $this->_usedProperties['timeZone'] = true;
            $this->timeZone = new \Symfony\Config\IvoryGoogleMap\TimeZoneConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "timeZone()" has already been initialized. You cannot pass values the second time you call timeZone().');
        }

        return $this->timeZone;
    }

    public function getExtensionAlias(): string
    {
        return 'ivory_google_map';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('map', $value)) {
            $this->_usedProperties['map'] = true;
            $this->map = new \Symfony\Config\IvoryGoogleMap\MapConfig($value['map']);
            unset($value['map']);
        }

        if (array_key_exists('static_map', $value)) {
            $this->_usedProperties['staticMap'] = true;
            $this->staticMap = new \Symfony\Config\IvoryGoogleMap\StaticMapConfig($value['static_map']);
            unset($value['static_map']);
        }

        if (array_key_exists('direction', $value)) {
            $this->_usedProperties['direction'] = true;
            $this->direction = new \Symfony\Config\IvoryGoogleMap\DirectionConfig($value['direction']);
            unset($value['direction']);
        }

        if (array_key_exists('distance_matrix', $value)) {
            $this->_usedProperties['distanceMatrix'] = true;
            $this->distanceMatrix = new \Symfony\Config\IvoryGoogleMap\DistanceMatrixConfig($value['distance_matrix']);
            unset($value['distance_matrix']);
        }

        if (array_key_exists('elevation', $value)) {
            $this->_usedProperties['elevation'] = true;
            $this->elevation = new \Symfony\Config\IvoryGoogleMap\ElevationConfig($value['elevation']);
            unset($value['elevation']);
        }

        if (array_key_exists('geocoder', $value)) {
            $this->_usedProperties['geocoder'] = true;
            $this->geocoder = new \Symfony\Config\IvoryGoogleMap\GeocoderConfig($value['geocoder']);
            unset($value['geocoder']);
        }

        if (array_key_exists('place_autocomplete', $value)) {
            $this->_usedProperties['placeAutocomplete'] = true;
            $this->placeAutocomplete = new \Symfony\Config\IvoryGoogleMap\PlaceAutocompleteConfig($value['place_autocomplete']);
            unset($value['place_autocomplete']);
        }

        if (array_key_exists('place_detail', $value)) {
            $this->_usedProperties['placeDetail'] = true;
            $this->placeDetail = new \Symfony\Config\IvoryGoogleMap\PlaceDetailConfig($value['place_detail']);
            unset($value['place_detail']);
        }

        if (array_key_exists('place_photo', $value)) {
            $this->_usedProperties['placePhoto'] = true;
            $this->placePhoto = \is_array($value['place_photo']) ? new \Symfony\Config\IvoryGoogleMap\PlacePhotoConfig($value['place_photo']) : $value['place_photo'];
            unset($value['place_photo']);
        }

        if (array_key_exists('place_search', $value)) {
            $this->_usedProperties['placeSearch'] = true;
            $this->placeSearch = new \Symfony\Config\IvoryGoogleMap\PlaceSearchConfig($value['place_search']);
            unset($value['place_search']);
        }

        if (array_key_exists('time_zone', $value)) {
            $this->_usedProperties['timeZone'] = true;
            $this->timeZone = new \Symfony\Config\IvoryGoogleMap\TimeZoneConfig($value['time_zone']);
            unset($value['time_zone']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['map'])) {
            $output['map'] = $this->map->toArray();
        }
        if (isset($this->_usedProperties['staticMap'])) {
            $output['static_map'] = $this->staticMap->toArray();
        }
        if (isset($this->_usedProperties['direction'])) {
            $output['direction'] = $this->direction->toArray();
        }
        if (isset($this->_usedProperties['distanceMatrix'])) {
            $output['distance_matrix'] = $this->distanceMatrix->toArray();
        }
        if (isset($this->_usedProperties['elevation'])) {
            $output['elevation'] = $this->elevation->toArray();
        }
        if (isset($this->_usedProperties['geocoder'])) {
            $output['geocoder'] = $this->geocoder->toArray();
        }
        if (isset($this->_usedProperties['placeAutocomplete'])) {
            $output['place_autocomplete'] = $this->placeAutocomplete->toArray();
        }
        if (isset($this->_usedProperties['placeDetail'])) {
            $output['place_detail'] = $this->placeDetail->toArray();
        }
        if (isset($this->_usedProperties['placePhoto'])) {
            $output['place_photo'] = $this->placePhoto instanceof \Symfony\Config\IvoryGoogleMap\PlacePhotoConfig ? $this->placePhoto->toArray() : $this->placePhoto;
        }
        if (isset($this->_usedProperties['placeSearch'])) {
            $output['place_search'] = $this->placeSearch->toArray();
        }
        if (isset($this->_usedProperties['timeZone'])) {
            $output['time_zone'] = $this->timeZone->toArray();
        }

        return $output;
    }

}
