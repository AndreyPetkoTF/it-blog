<?php
declare(strict_types=1);

namespace App\InfrastructureLayer\Repository;

use App\DomainLayer\Domain\Article;
use App\InfrastructureLayer\Collection\ArticleCollection;

interface ArticleRepository
{
    public function findById(int $id): Article;

    public function  findByQuery(): ArticleCollection;
}
