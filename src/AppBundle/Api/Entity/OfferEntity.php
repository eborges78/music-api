<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;


class OfferEntity implements OfferEntityInterface
{
    /** @var string $type */
    protected $type;

    /** @var string $type */
    protected $providerUrl;

    /** @var string $type */
    protected $status;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return OfferEntity
     */
    public function setType(string $type): OfferEntity
    {
        $this->type = $type;
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
     * @return OfferEntity
     */
    public function setProviderUrl(string $providerUrl): OfferEntity
    {
        $this->providerUrl = $providerUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return OfferEntity
     */
    public function setStatus(string $status): OfferEntity
    {
        $this->status = $status;
        return $this;
    }
}
