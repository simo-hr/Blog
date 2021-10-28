<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{

    public function __construct(private CategoryRepositoryInterface $categoryRepository)
    {
    }

    public function index()
    {
        return $this->categoryRepository->index();
    }

    public function store(Request $request)
    {
        return $this->categoryRepository->store($request->parent_id, $request->name);
    }

    public function show(int $id)
    {
        return $this->categoryRepository->show($id);
    }

    public function update(Request $request, int $id)
    {
        return $this->categoryRepository->update($request->parent_id, $request->name, $id);
    }

    public function destroy(int $id)
    {
        return $this->categoryRepository->destroy($id);
    }
}
