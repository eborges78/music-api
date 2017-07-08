<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

interface ArtistEntityInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return ArtistEntity
     */
    public function setId(int $id): ArtistEntity;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @param string $label
     * @return ArtistEntity
     */
    public function setLabel(string $label): ArtistEntity;

    /**
     * @return string
     */
    public function getImageUrl(): string;

    /**
     * @param string $imageUrl
     * @return ArtistEntity
     */
    public function setImageUrl(string $imageUrl): ArtistEntity;

    /**
     * @return string
     */
    public function getThumbUrl(): string;

    /**
     * @param string $thumbUrl
     * @return ArtistEntity
     */
    public function setThumbUrl(string $thumbUrl): ArtistEntity;

    /**
     * @return string
     */
    public function getFacebookUrl(): string;

    /**
     * @param string $facebookUrl
     * @return ArtistEntity
     */
    public function setFacebookUrl(string $facebookUrl): ArtistEntity;

    /**
     * @return int
     */
    public function getUpcomingEventCount(): int;

    /**
     * @param int $upcomingEventCount
     * @return ArtistEntity
     */
    public function setUpcomingEventCount(int $upcomingEventCount): ArtistEntity;

    /**
     * @return int
     */
    public function getPopularity(): int;

    /**
     * @param int $popularity
     * @return ArtistEntity
     */
    public function setPopularity(int $popularity): ArtistEntity;

    /**
     * @return string
     */
    public function getProviderUrl(): string;

    /**
     * @param string $providerUrl
     * @return ArtistEntity
     */
    public function setProviderUrl(string $providerUrl): ArtistEntity;
}