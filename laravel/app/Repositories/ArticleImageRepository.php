<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;

class ArticleImageRepository implements ArticleImageRepositoryInterface
{
    public function upload(string $image, int $id)
    {
        $article = Article::find($id);
        $article->update([
            'image' => $image
        ]);
        return $article;
    }
}
