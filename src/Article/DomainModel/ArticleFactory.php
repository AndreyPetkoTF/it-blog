<?php
declare(strict_types=1);

namespace App\Article\DomainModel;

use App\Article\DomainModel\Value\ArticleValueSeoData;

class ArticleFactory
{
    /**
     * @param int    $id
     * @param string $title
     * @param string $description
     * @param string $content
     *
     * @return Article
     */
    public function create(int $id, string $title, string $description, string $content): Article
    {
        $seoData = new ArticleValueSeoData($title, $description);

        return new Article($id, $seoData, $content);
    }

    /**
     * @param array $data
     * @return Article
     */
    public function createByArray(array $data): Article
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
