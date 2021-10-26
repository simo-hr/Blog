<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getArticleById($id)
    {
        return Article::find($id);
    }
}
