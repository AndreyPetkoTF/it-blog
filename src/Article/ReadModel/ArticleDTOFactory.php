<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

use App\Article\DomainModel\Value\ArticleValueSeoData;
use App\Article\ReadModel\ArticleDTO;

class ArticleDTOFactory
{
    /**
     * @param int    $id
     * @param string $title
     * @param string $description
     * @param string $content
     * @return ArticleDTO
     */
    public function create(int $id, string $title, string $description, string $content): ArticleDTO
    {
        $seoData = new ArticleValueSeoData($title, $description);

        return new ArticleDTO($id, $seoData, $content);
    }


    /**
     * @param array $data
     * @return ArticleDTO
     */
    public function fromArray(array $data): ArticleDTO
    {
        $this->checkValidArray($data);

        return $this->create(
            (int)$data['id'],
            $data['title'],
            $data['description'],
            $data['content']
        );
    }

    /**
     * @param array $data
     */
    private function checkValidArray(array $data): void
    {
        array_map(function($key) use ($data) {
            if (!isset($data[$key])) {
                throw new \InvalidArgumentException("Invalid array to create article");
            }
        }, ['id', 'title', 'description', 'content']);
    }
}
