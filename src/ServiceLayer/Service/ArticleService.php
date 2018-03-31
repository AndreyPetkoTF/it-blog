<?php
declare(strict_types=1);

namespace App\ServiceLayer\Service;

use App\InfrastructureLayer\Repository\ArticleRepository;

class ArticleService
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function findById(int $id)
    {
        return $this->articleRepository->findById($id);
    }
}
