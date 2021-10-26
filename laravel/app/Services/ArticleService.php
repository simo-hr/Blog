<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ArticleRepositoryInterface;

class ArticleService implements ArticleServiceInterface
{

    public function __construct(private ArticleRepositoryInterface $articleRepository)
    {
    }

    public function getArticle($id)
    {
        return $this->articleRepository->getArticleById($id);
    }
}
