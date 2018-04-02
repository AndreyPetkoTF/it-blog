<?php
declare(strict_types=1);

namespace App\Article\Infrastructure;

use App\Article\DomainModel\ArticleFactory;
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
     * @var ArticleFactory
     */
    private $articleFactory;


    /**
     * @param EntityManagerInterface $entityManager
     * @param ArticleFactory         $articleFactory
     */
    function __construct(EntityManagerInterface $entityManager, ArticleFactory $articleFactory)
    {
        $this->entityManager = $entityManager;
        $this->articleFactory = $articleFactory;
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

        $result = $stmt->fetch();

        return $this->articleFactory->createByArray($result);
    }
}
