<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Provider;

use AppBundle\Api\Entity\ArtistEntityInterface;
use AppBundle\Api\Entity\EventEntityInterface;

interface ProviderInterface
{
    /**
     * @param string $name
     * @return ArtistEntityInterface
     * @throws \Exception
     */
    public function getArtistByName(string $name): ArtistEntityInterface;

    /**
     * @param string $name
     * @return EventEntityInterface[]|array
     * @throws \Exception
     */
    public function getEventsByArtistName(string $name): array;
}