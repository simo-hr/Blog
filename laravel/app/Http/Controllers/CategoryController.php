<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Services\CategoryServiceInterface;

class CategoryController extends Controller
{
    public function __construct(private CategoryServiceInterface $categoryService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection($this->categoryService->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return CategoryResource
     */
    public function store(Request $request)
    {
        return new CategoryResource($this->categoryService->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return CategoryResource
     */
    public function show(Category $category)
    {
        return new CategoryResource($this->categoryService->show($category->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  Category $category
     * @return CategoryResource
     */
    public function update(Request $request, Category $category)
    {
        return new CategoryResource($this->categoryService->update($request, $category->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     */
    public function destroy(Category $category)
    {
        return $this->categoryService->destroy($category->id);
    }
}
