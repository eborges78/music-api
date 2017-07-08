<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);

namespace AppBundle\Api\Provider;

use AppBundle\Api\Entity\ArtistEntityInterface;
use AppBundle\Api\Entity\EventEntityInterface;
use AppBundle\Api\Exception\ArtistNotFoundException;
use AppBundle\Api\Exception\EventNotFoundException;
use AppBundle\Api\Hydrator\HydratorInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class BandsintownProvider implements BandsintownProviderInterface
{
    /** @var string $apiKey */
    protected $apiKey;

    /** @var string $apiBaseUrl */
    protected $apiBaseUrl;

    /** @var ClientInterface $client */
    protected $client;

    /** @var HydratorInterface $hydrator */
    protected $hydrator;

    /**
     * ArtistBandsintownProvider constructor.
     * @param ClientInterface $client
     * @param HydratorInterface $hydrator
     * @param string $apiKey
     * @param string $apiBaseUrl
     */
    public function __construct(
        ClientInterface $client,
        HydratorInterface $hydrator,
        string $apiKey,
        string $apiBaseUrl
    ) {
        $this->apiKey = $apiKey;
        $this->apiBaseUrl = $apiBaseUrl.'artists/';
        $this->client = new Client();
        $this->hydrator = $hydrator;
    }

    /**
     * @param string $name
     * @return ArtistEntityInterface
     * @throws \Exception
     */
    public function getArtistByName(string $name): ArtistEntityInterface
    {
        try {
            if (trim($name) !== '') {
                $params = ['query' => ['app_id' => $this->apiKey]];
                $res = $this->client->request('GET', $this->apiBaseUrl.$name, $params);
                if ($res->getStatusCode() === 200) {
                    $data = json_decode($res->getBody()->getContents() , true);
                    if (!empty($data)) {
                        return $this->hydrator->hydrateArtist($data);
                    }
                }
            }
            throw new ArtistNotFoundException();
        } catch (\Exception $e) {
            throw new $e;
        }
    }

    /**
     * @param string $name
     * @return EventEntityInterface[]|array
     * @throws \Exception
     */
    public function getEventsByArtistName(string $name): array
    {
        try {
            if (trim($name) !== '') {
                $params = ['query' => ['app_id' => $this->apiKey]];
                $res = $this->client->request('GET', $this->apiBaseUrl.$name.'/events', $params);
                if ($res->getStatusCode() === 200) {
                    $data = json_decode($res->getBody()->getContents() , true);
                    if (!empty($data)) {
                        $events = [];
                        foreach ($data as $dataEvent) {
                            if (!empty($dataEvent)) {
                                $events[] = $this->hydrator->hydrateEvent($dataEvent);
                            }
                        }
                        return $events;
                    }
                }
            }
            throw new EventNotFoundException();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
