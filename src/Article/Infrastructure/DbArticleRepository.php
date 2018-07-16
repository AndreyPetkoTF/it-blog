<?php
declare(strict_types=1);

namespace App\Article\Infrastructure;

use App\Article\DomainModel\ArticleDTOFactory;
use App\Article\DomainModel\ArticleRepository;
use App\Article\ReadModel\ArticleDTO;
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
     * @var ArticleDTOFactory
     */
    private $articleDTOFactory;

    function __construct(EntityManagerInterface $entityManager, ArticleDTOFactory $articleDTOFactory)
    {
        $this->entityManager = $entityManager;
        $this->articleDTOFactory = $articleDTOFactory;
    }

    /**
     * @param int $id
     * @return ArticleDTO
     */
    public function findById(int $id): ArticleDTO
    {
        $sql = 'SELECT * FROM article WHERE id = :id';

        $stmt = $this->entityManager->getConnection()->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch();

        return $this->articleDTOFactory->fromArray($result);
    }
}
