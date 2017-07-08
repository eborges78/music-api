<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 08/07/17
 * Time: 05:35
 */

namespace AppBundle\Api\Hydrator;

use AppBundle\Api\Entity\ArtistEntityInterface;
use AppBundle\Api\Entity\EventEntityInterface;
use AppBundle\Api\Entity\OfferEntityInterface;
use AppBundle\Api\Entity\VenueEntityInterface;

interface HydratorInterface
{
    /**
     * @param array $data
     * @return ArtistEntityInterface
     */
    public function hydrateArtist(array $data): ArtistEntityInterface;

    /**
     * @param array $data
     * @return EventEntityInterface
     */
    public function hydrateEvent(array $data): EventEntityInterface;

    /**
     * @param array $data
     * @return VenueEntityInterface
     */
    public function hydrateVenue(array $data): VenueEntityInterface;

    /**
     * @param array $data
     * @return OfferEntityInterface
     */
    public function hydrateOffer(array $data): OfferEntityInterface;
}