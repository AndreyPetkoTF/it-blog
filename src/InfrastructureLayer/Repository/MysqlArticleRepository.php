<?php
declare(strict_types=1);

namespace App\InfrastructureLayer\Repository;

use App\DomainLayer\Domain\Article;
use App\InfrastructureLayer\Collection\ArticleCollection;

class MysqlArticleRepository implements ArticleRepository
{
    public function findById(int $id): Article
    {
        return new Article();
    }

    public function findByQuery(): ArticleCollection
    {
        return new ArticleCollection();
    }

}
