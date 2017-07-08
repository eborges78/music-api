<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

class ArtistEntity implements ArtistEntityInterface
{
    /** @var int $id */
    protected $id;

    /** @var string $label */
    protected $label;

    /** @var string $imageUrl */
    protected $imageUrl;

    /** @var string $thumbUrl */
    protected $thumbUrl;

    /** @var string $providerUrl */
    protected $providerUrl;

    /** @var string $facebookUrl */
    protected $facebookUrl;

    /** @var int $upcomingEventCount */
    protected $upcomingEventCount;

    /** @var int $popularity */
    protected $popularity;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ArtistEntity
     */
    public function setId(int $id): ArtistEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return ArtistEntity
     */
    public function setLabel(string $label): ArtistEntity
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return ArtistEntity
     */
    public function setImageUrl(string $imageUrl): ArtistEntity
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     * @return ArtistEntity
     */
    public function setThumbUrl(string $thumbUrl): ArtistEntity
    {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     * @param string $facebookUrl
     * @return ArtistEntity
     */
    public function setFacebookUrl(string $facebookUrl): ArtistEntity
    {
        $this->facebookUrl = $facebookUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpcomingEventCount(): int
    {
        return $this->upcomingEventCount;
    }

    /**
     * @param int $upcomingEventCount
     * @return ArtistEntity
     */
    public function setUpcomingEventCount(int $upcomingEventCount): ArtistEntity
    {
        $this->upcomingEventCount = $upcomingEventCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPopularity(): int
    {
        return $this->popularity;
    }

    /**
     * @param int $popularity
     * @return ArtistEntity
     */
    public function setPopularity(int $popularity): ArtistEntity
    {
        $this->popularity = $popularity;
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
     * @return ArtistEntity
     */
    public function setProviderUrl(string $providerUrl): ArtistEntity
    {
        $this->providerUrl = $providerUrl;
        return $this;
    }
}
