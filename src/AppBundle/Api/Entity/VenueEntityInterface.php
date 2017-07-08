<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

interface VenueEntityInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return VenueEntity
     */
    public function setName(string $name): VenueEntity;

    /**
     * @return string
     */
    public function getLatitude(): string;

    /**
     * @param string $latitude
     * @return VenueEntity
     */
    public function setLatitude(string $latitude): VenueEntity;

    /**
     * @return string
     */
    public function getLongitude(): string;

    /**
     * @param string $longitude
     * @return VenueEntity
     */
    public function setLongitude(string $longitude): VenueEntity;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @param string $city
     * @return VenueEntity
     */
    public function setCity(string $city): VenueEntity;

    /**
     * @return string
     */
    public function getRegion(): string;

    /**
     * @param string $region
     * @return VenueEntity
     */
    public function setRegion(string $region): VenueEntity;

    /**
     * @return string
     */
    public function getCountry(): string;

    /**
     * @param string $country
     * @return VenueEntity
     */
    public function setCountry(string $country): VenueEntity;
}