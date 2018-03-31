<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

use App\Article\DomainModel\Value\ArticleValueSeoData;

class Article
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
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return ArticleValueSeoData
     */
    public function getSeoData(): ArticleValueSeoData
    {
        return $this->seoData;
    }

    /**
     * @param ArticleValueSeoData $seoData
     */
    public function setSeoData(ArticleValueSeoData $seoData)
    {
        $this->seoData = $seoData;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }
}
