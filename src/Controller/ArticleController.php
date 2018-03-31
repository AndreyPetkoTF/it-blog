<?php
declare(strict_types=1);

namespace App\Controller;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @Route("/", name="index")
     *
     */
    public function indexAction()
    {

        $articleService = $this->get('article_service');

//        $serializer = SerializerBuilder::create()->build();
//        $jsonContent = $serializer->serialize($list, 'json', SerializationContext::create()->setGroups(['list']));

//        return new Response($jsonContent);
    }
}
