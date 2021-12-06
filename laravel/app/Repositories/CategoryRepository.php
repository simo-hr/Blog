<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index(bool $isOnlyParent)
    {
        if ($isOnlyParent) {
            return Category::where('parent_id', null)->get();
        }
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
        $category = Category::find($id);
        $category->update([
            'parent_id' => $parent_id,
            'name' => $name
        ]);
        return $category;
    }

    public function destroy(int $id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return response()->json('success', Response::HTTP_OK);
        } else {
            return response()->json('failed', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
