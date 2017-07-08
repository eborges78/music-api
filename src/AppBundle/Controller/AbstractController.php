<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel BORGES
 */
declare(strict_types=1);


namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController extends Controller
{
    /**
     * @param array $data
     * @return JsonResponse
     */
    protected function getJsonResponse(array $data): JsonResponse
    {
        $response = new JsonResponse();
        $serializer = $this->get('jms_serializer');
        $content = $serializer->serialize($data, 'json');
        $response->setContent($content);
        return $response;
    }
}
