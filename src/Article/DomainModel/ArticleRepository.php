<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

interface ArticleRepository
{
    public function findById(int $id);
}
