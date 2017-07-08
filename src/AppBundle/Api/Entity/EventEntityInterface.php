<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

interface EventEntityInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return EventEntity
     */
    public function setId(int $id): EventEntity;

    /**
     * @return int
     */
    public function getArtistId(): int;

    /**
     * @param int $artistId
     * @return EventEntity
     */
    public function setArtistId(int $artistId): EventEntity;

    /**
     * @return string
     */
    public function getProviderUrl(): string;

    /**
     * @param string $providerUrl
     * @return EventEntity
     */
    public function setProviderUrl(string $providerUrl): EventEntity;

    /**
     * @return \DateTime|null
     */
    public function getSaleDate();

    /**
     * @param \DateTime|null $saleDate
     * @return EventEntity
     */
    public function setSaleDate($saleDate);

    /**
     * @return \DateTime|null
     */
    public function getEventDate();

    /**
     * @param \DateTime|null $eventDate
     * @return EventEntity
     */
    public function setEventDate($eventDate);

    /**
     * @return VenueEntityInterface
     */
    public function getVenue(): VenueEntityInterface;

    /**
     * @param VenueEntityInterface $venue
     * @return EventEntity
     */
    public function setVenue(VenueEntityInterface $venue): EventEntity;

    /**
     * @return OfferEntityInterface[]|array
     */
    public function getOffers();

    /**
     * @param OfferEntityInterface[]|array $offers
     * @return EventEntity
     */
    public function setOffers($offers);

    /**
     * @return array
     */
    public function getLineup(): array;

    /**
     * @param array $lineup
     * @return EventEntity
     */
    public function setLineup(array $lineup): EventEntity;
}