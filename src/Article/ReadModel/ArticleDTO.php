<?php
declare(strict_types=1);

namespace App\Article\ReadModel;

use App\Article\DomainModel\Value\ArticleValueSeoData;

class ArticleDTO
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var ArticleValueSeoData
     */
    private $seoData;
    /**
     * @var string
     */
    private $content;

    /**
     * @param int                 $id
     * @param ArticleValueSeoData $seoData
     * @param string              $content
     */
    function __construct(int $id, ArticleValueSeoData $seoData, string $content)
    {
        $this->id = $id;
        $this->seoData = $seoData;
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return ArticleValueSeoData
     */
    public function getSeoData(): ArticleValueSeoData
    {
        return $this->seoData;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
