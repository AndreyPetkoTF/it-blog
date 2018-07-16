<?php
declare(strict_types=1);

namespace App\Controller;

use App\Article\ReadModel\ArticleReadModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends BaseController
{
    /**
     * @Route("/{id}", name="index")
     *
     * @param int $id
     * @param ArticleReadModel $articleService
     * @return string
     */
    public function indexAction(int $id, ArticleReadModel $articleService)
    {
        return $this->serializeData($articleService->findById($id));
    }

    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     */
    public function createAction(Request $request)
    {
//        $formData = [];
    }
}
