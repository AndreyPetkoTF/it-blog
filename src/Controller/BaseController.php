<?php
declare(strict_types=1);

namespace App\Controller;

use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    /**
     * @param $data
     * @return string
     */
    public function serializeData($data)
    {
        $serializer = SerializerBuilder::create()->build();
        return new Response($serializer->serialize($data, 'json'));
    }
}
