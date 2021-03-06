<?php
declare(strict_types=1);

namespace App\Article\ReadModel;

use App\Article\DomainModel\ArticleRepository;

class ArticleReadModel
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->articleRepository->findById($id);
    }
}
