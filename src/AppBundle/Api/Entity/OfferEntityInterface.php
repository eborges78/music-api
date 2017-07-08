<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Entity;

interface OfferEntityInterface
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @param string $type
     * @return OfferEntity
     */
    public function setType(string $type): OfferEntity;

    /**
     * @return string
     */
    public function getProviderUrl(): string;

    /**
     * @param string $providerUrl
     * @return OfferEntity
     */
    public function setProviderUrl(string $providerUrl): OfferEntity;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return OfferEntity
     */
    public function setStatus(string $status): OfferEntity;
}