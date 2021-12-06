<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\CategoryResource;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{

    public function __construct(private CategoryRepositoryInterface $categoryRepository)
    {
    }

    public function index(Request $request)
    {

        $isOnlyParent = (bool)$request->is_only_parent === true ? true : false;
        return  CategoryResource::collection($this->categoryRepository->index($isOnlyParent));
    }

    public function store(Request $request)
    {
        return new CategoryResource($this->categoryRepository->store($request->parent_id, $request->name));
    }

    public function show(int $id)
    {
        return new CategoryResource($this->categoryRepository->show($id));
    }

    public function update(Request $request, int $id)
    {
        return new CategoryResource($this->categoryRepository->update($request->parent_id, $request->name, $id));
    }

    public function destroy(int $id)
    {
        return $this->categoryRepository->destroy($id);
    }
}
