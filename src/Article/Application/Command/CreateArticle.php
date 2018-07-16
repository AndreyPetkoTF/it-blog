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

//interface Arrayable {
//    public function toArray();
//}
//
//class A {
//    public function toArray() {
//        return [];
//    }
//    public function blebleblebl() {
//        return [];
//    }
//}
//
//new OtherClass((new A())->toArray());
//new OtherClass((new A())->blebleblebl());
//
//class SomeOtherClass {
//    public function __construct(Arrayable $a)
//    {
//        $this->a = $a->toArray();
//    }
//
//
//}
//
//
//new SomeOtherClass(new A());
//
//



