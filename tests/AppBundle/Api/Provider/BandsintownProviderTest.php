<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);


namespace tests\AppBundle\Api\Provider;

use AppBundle\Api\Entity\ArtistEntity;
use AppBundle\Api\Entity\ArtistEntityInterface;
use AppBundle\Api\Entity\EventEntity;
use AppBundle\Api\Entity\OfferEntity;
use AppBundle\Api\Entity\VenueEntity;
use AppBundle\Api\Entity\VenueEntityInterface;
use AppBundle\Api\Exception\ArtistNotFoundException;
use AppBundle\Api\Exception\EventNotFoundException;
use AppBundle\Api\Hydrator\BandsintownHydrator;
use AppBundle\Api\Provider\BandsintownProvider;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Mockery as m;

class BandsintownProviderTest extends WebTestCase
{
    /** @var m\MockInterface   */
    private $provider;

    public function setUp()
    {
        $this->provider = new BandsintownProvider(
            m::mock(Client::class),
            new BandsintownHydrator(),
            'dfsdf',
            'http://rest.bandsintown.com/'
        );
    }

    public function testGetArtistByNameShouldReturnAnArtistEntity()
    {
        $entity = $this->provider->getArtistByName('greenday');
        $this->assertInstanceOf(ArtistEntityInterface::class, $entity);
    }

    public function testGetArtistByNameShouldReturnAnArtistNotFoundException()
    {
        $this->expectException(ArtistNotFoundException::class);
        $this->provider->getArtistByName('sdsdqDQSDQSdqs');
    }
    public function testGetEventsByArtistNameShouldReturnAnArray()
    {
        $entity = $this->provider->getEventsByArtistName('greenday');
        $this->assertInternalType('array', $entity);
    }

    public function testGetEventsByArtistShouldReturnAClientException()
    {
        $this->expectException(ClientException::class);
        $this->provider->getEventsByArtistName('sdsdqDQSDQSdqs');
    }
    public function testGetEventsByArtistShouldReturnAnEventNotFoundException()
    {
        $this->expectException(EventNotFoundException::class);
        $this->provider->getEventsByArtistName('');
    }
}