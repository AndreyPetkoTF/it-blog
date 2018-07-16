<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

use App\Article\ReadModel\ArticleDTO;

interface ArticleRepository
{
    public function findById(int $id): ArticleDTO;
}
