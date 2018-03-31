<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

interface ArticleCollectionRepository
{
    public function findAll();
}
