<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

use Doctrine\ORM\EntityManager;

/**
 * Class DbArticleRepository
 * @package App\Article\DomainModel
 */
class DbArticleRepository implements ArticleRepository
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        $sql = 'SELECT * FROM article WHERE id = :id';

        $stmt = $this->entityManager->getConnection()->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
