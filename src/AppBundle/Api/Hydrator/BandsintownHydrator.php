<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 08/07/17
 * Time: 05:22
 */

namespace AppBundle\Api\Hydrator;


use AppBundle\Api\Entity\ArtistEntity;
use AppBundle\Api\Entity\ArtistEntityInterface;
use AppBundle\Api\Entity\EventEntity;
use AppBundle\Api\Entity\EventEntityInterface;
use AppBundle\Api\Entity\OfferEntity;
use AppBundle\Api\Entity\OfferEntityInterface;
use AppBundle\Api\Entity\VenueEntity;
use AppBundle\Api\Entity\VenueEntityInterface;

class BandsintownHydrator implements HydratorInterface
{
    /**
     * @param array $data
     * @return ArtistEntityInterface
     */
    public function hydrateArtist(array $data): ArtistEntityInterface
    {
        $entity = new ArtistEntity();
        if (isset($data['id'])) {
            $entity->setId(intval($data['id']));
        }
        if (isset($data['name'])) {
            $entity->setLabel(trim($data['name']));
        }
        if (isset($data['url'])) {
            $entity->setProviderUrl(trim($data['url']));
        }
        if (isset($data['image_url'])) {
            $entity->setImageUrl(trim($data['image_url']));
        }
        if (isset($data['thumb_url'])) {
            $entity->setThumbUrl(trim($data['thumb_url']));
        }
        if (isset($data['facebook_page_url'])) {
            $entity->setFacebookUrl(trim($data['facebook_page_url']));
        }
        if (isset($data['upcoming_event_count'])) {
            $entity->setUpcomingEventCount(intval($data['upcoming_event_count']));
        }
        if (isset($data['tracker_count'])) {
            $entity->setPopularity(intval($data['tracker_count']));
        }
        return $entity;
    }

    /**
     * @param array $data
     * @return VenueEntityInterface
     */
    public function hydrateVenue(array $data): VenueEntityInterface
    {
        $entity = new VenueEntity();
        if (isset($data['name'])) {
            $entity->setName(trim($data['name']));
        }
        if (isset($data['latitude'])) {
            $entity->setLatitude(trim($data['latitude']));
        }
        if (isset($data['longitude'])) {
            $entity->setLongitude(trim($data['longitude']));
        }
        if (isset($data['city'])) {
            $entity->setCity(trim($data['city']));
        }
        if (isset($data['region'])) {
            $entity->setRegion(trim($data['region']));
        }
        if (isset($data['country'])) {
            $entity->setCountry(trim($data['country']));
        }
        return $entity;
    }

    /**
     * @param array $data
     * @return OfferEntityInterface
     */
    public function hydrateOffer(array $data): OfferEntityInterface
    {
        $entity = new OfferEntity();
        if (isset($data['type'])) {
            $entity->setType(trim($data['type']));
        }
        if (isset($data['url'])) {
            $entity->setProviderUrl(trim($data['url']));
        }
        if (isset($data['status'])) {
            $entity->setStatus(trim($data['status']));
        }
        return $entity;
    }

    /**
     * @param array $data
     * @return EventEntityInterface
     */
    public function hydrateEvent(array $data): EventEntityInterface
    {
        $entity = new EventEntity();
        if (isset($data['id'])) {
            $entity->setId(intval($data['id']));
        }
        if (isset($data['artist_id'])) {
            $entity->setArtistId(trim($data['artist_id']));
        }
        if (isset($data['url'])) {
            $entity->setProviderUrl(trim($data['url']));
        }
        if (isset($data['on_sale_datetime']) && !empty($data['on_sale_datetime'])) {
            $saleDate = new \DateTime($data['on_sale_datetime']);
            $entity->setSaleDate($saleDate);
        }
        if (isset($data['datetime']) && !empty($data['datetime'])) {
            $saleDate = new \DateTime($data['datetime']);
            $entity->setEventDate($saleDate);
        }
        if (isset($data['venue'])) {
            $entity->setVenue($this->hydrateVenue($data['venue']));
        }
        if ((isset($data['offers'])) && (is_array($data['offers']))) {
            $offers = [];
            foreach( $data['offers'] as $offer) {
                $offers[] = $this->hydrateOffer($offer);
            }
            $entity->setOffers($offers);
        }
        if ((isset($data['lineup'])) && (is_array($data['lineup']))) {
            $entity->setLineup($data['lineup']);
        }
        return $entity;
    }
}
