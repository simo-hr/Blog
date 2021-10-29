<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;
use Symfony\Component\HttpFoundation\Response;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function index()
    {
        return Article::all();
    }

    public function store(int $category_id, string $title, string $content)
    {
        return Article::create([
            'category_id' => $category_id,
            'title' => $title,
            'content' => $content
        ]);
    }

    public function show(int $id)
    {
        return Article::find($id);
    }

    public function update(int $category_id, string $title, string $content, int $id)
    {
        $article = Article::find($id);
        $article->update([
            'category_id' => $category_id,
            'title' => $title,
            'content' => $content
        ]);
        return $article;
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);
        if ($article->delete()) {
            return response()->json('success', Response::HTTP_OK);
        } else {
            return response()->json('failed', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
