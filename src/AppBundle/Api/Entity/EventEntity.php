<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

class EventEntity implements EventEntityInterface
{
    /** @var int $id */
    protected $id;

    /** @var int $artist_id */
    protected $artistId;

    /** @var string $providerUrl */
    protected $providerUrl;

    /** @var \DateTime|null $saleDate */
    protected $saleDate;

    /** @var \DateTime|null $eventDate */
    protected $eventDate;

    /** @var VenueEntityInterface $venue */
    protected $venue;

    /** @var array|OfferEntityInterface[]  */
    protected $offers;

    /** @var array $lineup */
    protected $lineup;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return EventEntity
     */
    public function setId(int $id): EventEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getArtistId(): int
    {
        return $this->artistId;
    }

    /**
     * @param int $artistId
     * @return EventEntity
     */
    public function setArtistId(int $artistId): EventEntity
    {
        $this->artistId = $artistId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProviderUrl(): string
    {
        return $this->providerUrl;
    }

    /**
     * @param string $providerUrl
     * @return EventEntity
     */
    public function setProviderUrl(string $providerUrl): EventEntity
    {
        $this->providerUrl = $providerUrl;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }

    /**
     * @param \DateTime|null $saleDate
     * @return EventEntity
     */
    public function setSaleDate($saleDate)
    {
        $this->saleDate = $saleDate;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param \DateTime|null $eventDate
     * @return EventEntity
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return VenueEntityInterface
     */
    public function getVenue(): VenueEntityInterface
    {
        return $this->venue;
    }

    /**
     * @param VenueEntityInterface $venue
     * @return EventEntity
     */
    public function setVenue(VenueEntityInterface $venue): EventEntity
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * @return OfferEntityInterface[]|array
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param OfferEntityInterface[]|array $offers
     * @return EventEntity
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * @return array
     */
    public function getLineup(): array
    {
        return $this->lineup;
    }

    /**
     * @param array $lineup
     * @return EventEntity
     */
    public function setLineup(array $lineup): EventEntity
    {
        $this->lineup = $lineup;
        return $this;
    }
}
