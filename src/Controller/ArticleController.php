<?php
declare(strict_types=1);

namespace App\Controller;

use App\Article\Application\ArticleService;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends BaseController
{
    /**
     * @Route("/{id}", name="index")
     *
     * @param int $id
     * @param ArticleService $articleService
     * @return string
     */
    public function indexAction(int $id, ArticleService $articleService)
    {
        return $this->serializeData($articleService->findById($id));
    }
}
