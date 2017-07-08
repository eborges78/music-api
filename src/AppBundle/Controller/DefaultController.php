<?php

namespace AppBundle\Controller;

use AppBundle\Api\Provider\BandsintownProvider;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homeApi")
     */
    public function indexAction()
    {
        $data = [
            'code' => '200',
            'name' => $this->getParameter('app_name'),
            'version' => $this->getParameter('app_version'),
            'api'  => [
                '/api/artist/{artistName}',
                '/api/events/{artistName}'
            ]
        ];
        return $this->getJsonResponse($data);
    }

    /**
     * @Route("/api/artist/{artistName}", name="artistApi")
     * @param string $artistName
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function artistAction(string $artistName)
    {
        /** @var BandsintownProvider $provider */
        $provider = $this->get('BandsintowProviderService');
        $artists = $provider->getArtistByName($artistName);

        return $this->getJsonResponse([$artists]);
    }

    /**
     * @Route("/api/events/{artistName}", name="eventApi")
     * @param string $artistName
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function eventAction(string $artistName)
    {
        /** @var BandsintownProvider $provider */
        $provider = $this->get('BandsintowProviderService');
        $events = $provider->getEventsByArtistName($artistName);

        return $this->getJsonResponse($events);
    }
}
