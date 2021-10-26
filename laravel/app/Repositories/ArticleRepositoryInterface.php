<?php

declare(strict_types=1);

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function getArticleById($id);
}
