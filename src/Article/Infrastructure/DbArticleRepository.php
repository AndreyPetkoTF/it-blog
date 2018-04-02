<?php
declare(strict_types=1);

namespace App\Article\Infrastructure;

use App\Article\DomainModel\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;


/**
 * Class DbArticleRepository
 * @package App\Article\DomainModel
 */
class DbArticleRepository implements ArticleRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    function __construct(EntityManagerInterface $entityManager)
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
