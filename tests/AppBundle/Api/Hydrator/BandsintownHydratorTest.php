<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace Tests\AppBundle\Api\Hydrator;

use AppBundle\Api\Entity\ArtistEntity;
use AppBundle\Api\Entity\EventEntity;
use AppBundle\Api\Entity\OfferEntity;
use AppBundle\Api\Entity\VenueEntity;
use AppBundle\Api\Entity\VenueEntityInterface;
use AppBundle\Api\Hydrator\BandsintownHydrator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Mockery as m;

class BandsintownHydratorTest extends WebTestCase
{
    /** @var BandsintownHydrator */
    protected $hydrator;

    public function setUp()
    {
        $this->hydrator = new BandsintownHydrator();
    }

    public function testHydrateArtistShouldReturnAnArtistEntityInterface()
    {
        $data = [
              "id" => 254,
              "name" => "Green Day",
              "url" => 'http://www.bandsintown.com/GreenDay?came_from=67&app_id=eyJUb2tlblR5cGUiOiJBUEkiLCJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJhOTQwODkxNi1mNjc2LTRmYTYtOTE2My1iYzQ0YmMwYWRjZjMiLCJpYXQiOjE0OTk0NzY5MzB9.P40N-vwpLZI6wabxfXFKRRmxDP4BFCZdn3aP1Q-qvzqFhxJPqQl_ZEu5XQs0ZN3MeilivxdlKRvjKWZIyyUxdQ',
              "image_url" => "https://s3.amazonaws.com/bit-photos/large/6828886.jpeg",
              "thumb_url" => "https://s3.amazonaws.com/bit-photos/thumb/6828886.jpeg",
              "facebook_page_url" => "https://www.facebook.com/GreenDay",
              "tracker_count" => 3162594,
              "upcoming_event_count" => 35,
            ];
        $entity = m::mock(ArtistEntity::class);

        $entity
            ->shouldReceive('setId')
            ->once()
            ->with($data['id'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setLabel')
            ->once()
            ->with($data['name'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setProviderUrl')
            ->once()
            ->with($data['url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setImageUrl')
            ->once()
            ->with($data['image_url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setThumbUrl')
            ->once()
            ->with($data['thumb_url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setFacebookUrl')
            ->once()
            ->with($data['facebook_page_url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setUpcomingEventCount')
            ->once()
            ->with($data['upcoming_event_count'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setPopularity')
            ->once()
            ->with($data['tracker_count'])
            ->andReturnSelf();

        $resultEntity = $this->hydrator->hydrateArtist($data);
        $this->assertSame(intval($data['id']), $resultEntity->getId());
        $this->assertSame($data['name'], $resultEntity->getLabel());
        $this->assertSame($data['url'], $resultEntity->getProviderUrl());
        $this->assertSame($data['image_url'], $resultEntity->getImageUrl());
        $this->assertSame($data['thumb_url'], $resultEntity->getThumbUrl());
        $this->assertSame($data['facebook_page_url'], $resultEntity->getFacebookUrl());
        $this->assertSame($data['upcoming_event_count'], $resultEntity->getUpcomingEventCount());
        $this->assertSame($data['tracker_count'], $resultEntity->getPopularity());
    }

    public function testHydrateVenueShouldReturnAVenueEntityInterface()
    {
        $data = [
            "name" => "White River Aphitheatre",
            "latitude" => "47.3075",
            "longitude" => "-122.2272222",
            "city" => "Auburn",
            "region" => "WA",
            "country" => "United States",
        ];
        $entity = m::mock(VenueEntity::class);

        $entity
            ->shouldReceive('setName')
            ->once()
            ->with($data['name'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setLatitude')
            ->once()
            ->with($data['latitude'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setLongitude')
            ->once()
            ->with($data['longitude'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setCity')
            ->once()
            ->with($data['city'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setRegion')
            ->once()
            ->with($data['region'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setCountry')
            ->once()
            ->with($data['country'])
            ->andReturnSelf();

        $resultEntity = $this->hydrator->hydrateVenue($data);
        $this->assertSame($data['name'], $resultEntity->getName());
        $this->assertSame($data['latitude'], $resultEntity->getLatitude());
        $this->assertSame($data['longitude'], $resultEntity->getLongitude());
        $this->assertSame($data['city'], $resultEntity->getCity());
        $this->assertSame($data['region'], $resultEntity->getRegion());
        $this->assertSame($data['country'], $resultEntity->getCountry());
    }

    public function testHydrateOfferShouldReturnAOfferEntityInterface()
    {
        $data = [
            "type" => "Tickets",
            "url" => "http://www.bandsintown.com/event/13640677/buy_tickets?app_id=eyJUb2tlblR5cGUiOiJBUEkiLCJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJhOTQwODkxNi1mNjc2LTRmYTYtOTE2My1iYzQ0YmMwYWRjZjMiLCJpYXQiOjE0OTk0NzY5MzB9.P40N-vwpLZI6wabxfXFKRRmxDP4BFCZdn3aP1Q-qvzqFhxJPqQl_ZEu5XQs0ZN3MeilivxdlKRvjKWZIyyUxdQ&artist=Green+Day&came_from=67",
            "status" => "available"
        ];
        $entity = m::mock(OfferEntity::class);

        $entity
            ->shouldReceive('setType')
            ->once()
            ->with($data['type'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setProviderUrl')
            ->once()
            ->with($data['url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setStatus')
            ->once()
            ->with($data['status'])
            ->andReturnSelf();

        $resultEntity = $this->hydrator->hydrateOffer($data);
        $this->assertSame($data['type'], $resultEntity->getType());
        $this->assertSame($data['url'], $resultEntity->getProviderUrl());
        $this->assertSame($data['status'], $resultEntity->getStatus());
    }

    public function testHydrateEventShouldReturnAnEventEntityInterface()
    {
        $data = [
            "id" => "13640677",
            "artist_id" => "254",
            "url" => "http://www.bandsintown.com/event/13640677?app_id=eyJUb2tlblR5cGUiOiJBUEkiLCJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJhOTQwODkxNi1mNjc2LTRmYTYtOTE2My1iYzQ0YmMwYWRjZjMiLCJpYXQiOjE0OTk0NzY5MzB9.P40N-vwpLZI6wabxfXFKRRmxDP4BFCZdn3aP1Q-qvzqFhxJPqQl_ZEu5XQs0ZN3MeilivxdlKRvjKWZIyyUxdQ&artist=Green+Day&came_from=67",
            "on_sale_datetime" => "2017-08-01T19:00:00",
            "datetime" => "2017-08-01T19:00:00",
            "venue" => [
                "name" => "White River Aphitheatre",
                "latitude" => "47.3075",
                "longitude" => "-122.2272222",
                "city" => "Auburn",
                "region" => "WA",
                "country" => "United States",
                ],
            "offers" => [
                0 => [
                    "type" => "Tickets",
                    "url" => "http://www.bandsintown.com/event/13640677/buy_tickets?app_id=eyJUb2tlblR5cGUiOiJBUEkiLCJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJhOTQwODkxNi1mNjc2LTRmYTYtOTE2My1iYzQ0YmMwYWRjZjMiLCJpYXQiOjE0OTk0NzY5MzB9.P40N-vwpLZI6wabxfXFKRRmxDP4BFCZdn3aP1Q-qvzqFhxJPqQl_ZEu5XQs0ZN3MeilivxdlKRvjKWZIyyUxdQ&artist=Green+Day&came_from=67",
                    "status" => "available",
                ],
            ],
            "lineup" => [
                0 => "Green Day"
            ],
        ];
        $entity = m::mock(EventEntity::class);

        $entity
            ->shouldReceive('setId')
            ->once()
            ->with(intval($data['id']))
            ->andReturnSelf();

        $entity
            ->shouldReceive('setArtistId')
            ->once()
            ->with($data['artist_id'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setProviderUrl')
            ->once()
            ->with($data['url'])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setSaleDate')
            ->once()
            ->with(new \DateTime($data['on_sale_datetime']))
            ->andReturnSelf();

        $entity
            ->shouldReceive('setEventDate')
            ->once()
            ->with(new \DateTime($data['datetime']))
            ->andReturnSelf();

        $entity
            ->shouldReceive('setVenue')
            ->once()
            ->with($this->hydrator->hydrateVenue($data['venue']))
            ->andReturnSelf();

        $entity
            ->shouldReceive('setOffers')
            ->once()
            ->with([$this->hydrator->hydrateOffer($data['offers'][0])])
            ->andReturnSelf();

        $entity
            ->shouldReceive('setLineup')
            ->once()
            ->with($data['lineup'])
            ->andReturnSelf();

        $resultEntity = $this->hydrator->hydrateEvent($data);
        $this->assertSame(intval($data['id']), $resultEntity->getId());
        $this->assertSame(intval($data['artist_id']), $resultEntity->getArtistId());
        $this->assertSame($data['url'], $resultEntity->getProviderUrl());
        $this->assertSame($data['on_sale_datetime'], $resultEntity->getSaleDate()->format('Y-m-d\TH:i:s'));
        $this->assertSame($data['datetime'], $resultEntity->getEventDate()->format('Y-m-d\TH:i:s'));
        $this->assertInstanceOf(VenueEntityInterface::class, $resultEntity->getVenue());
        $this->assertSame(1, count($resultEntity->getOffers()));
        $this->assertSame($data['lineup'], $resultEntity->getLineup());
    }
}