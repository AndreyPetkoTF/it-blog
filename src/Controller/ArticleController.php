<?php
declare(strict_types=1);

namespace App\Controller;

use App\Article\Application\ArticleService;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/{id}", name="index")
     *
     * @param int $id
     * @return mixed
     */
    public function indexAction(int $id, ArticleService $articleService)
    {
        $articleService->findById($id);

        return $articleService->findById($id);

//        $serializer = SerializerBuilder::create()->build();
//        $jsonContent = $serializer->serialize($list, 'json', SerializationContext::create()->setGroups(['list']));

//        return new Response($jsonContent);
    }
}
