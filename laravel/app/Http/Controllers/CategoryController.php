<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryServiceInterface $categoryService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->categoryService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     * @return
     */
    public function store(CategoryRequest $request)
    {
        return $this->categoryService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return
     */
    public function show(Category $category)
    {
        return $this->categoryService->show($category->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryRequest $request
     * @param  Category $category
     * @return
     */
    public function update(CategoryRequest $request, Category $category)
    {
        return $this->categoryService->update($request, $category->id);
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
