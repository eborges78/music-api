<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;


class VenueEntity implements VenueEntityInterface
{
    /** @var string $name */
    protected $name;

    /** @var string $latitude */
    protected $latitude;

    /** @var string $longitude */
    protected $longitude;

    /** @var string $city */
    protected $city;

    /** @var string $region */
    protected $region;

    /** @var string $country */
    protected $country;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VenueEntity
     */
    public function setName(string $name): VenueEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return VenueEntity
     */
    public function setLatitude(string $latitude): VenueEntity
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return VenueEntity
     */
    public function setLongitude(string $longitude): VenueEntity
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return VenueEntity
     */
    public function setCity(string $city): VenueEntity
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return VenueEntity
     */
    public function setRegion(string $region): VenueEntity
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return VenueEntity
     */
    public function setCountry(string $country): VenueEntity
    {
        $this->country = $country;
        return $this;
    }
}
