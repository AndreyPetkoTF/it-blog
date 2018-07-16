<?php
declare(strict_types=1);

namespace App\Article\Application\Command;

use App\Article\DomainModel\Value\ArticleValueSeoData;

class CreateArticle extends ArticleCommand
{
    /**
     * @var string
     */
    private $content;
    /**
     * @var ArticleValueSeoData
     */
    private $seoData;

    public function __construct(string $content, ArticleValueSeoData $seoData)
    {
        $this->content = $content;
        $this->seoData = $seoData;
    }

    public static function fromArticleFormType(ArticleFormType $form)
    {
        $seoData = new ArticleValueSeoData($form->getTitle(), $form->getDesc());
        return new self($form->getContent(), $seoData);
    }

    public static function fromArray(array $something)
    {

    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return ArticleValueSeoData
     */
    public function getSeoData(): ArticleValueSeoData
    {
        return $this->seoData;
    }
}


