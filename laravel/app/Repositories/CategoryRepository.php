<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        return Category::all();
    }

    public function store(?int $parent_id, string $name)
    {
        return Category::create([
            'parent_id' => $parent_id,
            'name' => $name
        ]);
    }

    public function show(int $id)
    {
        return Category::find($id);
    }

    public function update(?int $parent_id, string $name, int $id)
    {
        $article = Category::find($id);
        $article->update([
            'parent_id' => $parent_id,
            'name' => $name
        ]);
        return $article;
    }

    public function destroy(int $id)
    {
        $article = Category::find($id);
        if ($article->delete()) {
            return response()->json('success', Response::HTTP_OK);
        } else {
            return response()->json('failed', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
