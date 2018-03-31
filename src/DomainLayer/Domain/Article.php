<?php
declare(strict_types=1);

namespace App\DomainLayer\Domain;

use App\DomainLayer\ValueObject\SeoData;

class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var SeoData
     */
    private $seoData;

    /**
     * @var string
     */
    private $content;

    public function __construct(int $id, SeoData $seoData, string $content)
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
     * @return mixed
     */
    public function getSeoData()
    {
        return $this->seoData;
    }

    /**
     * @param mixed $seoData
     */
    public function setSeoData(SeoData $seoData)
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
