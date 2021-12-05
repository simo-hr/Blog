<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Services\ArticleServiceInterface;

class ArticleController extends Controller
{
    public function __construct(private ArticleServiceInterface $articleService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return $articleService
     */
    public function index()
    {
        return $this->articleService->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArticleRequest  $request
     * @return $articleService
     */
    public function store(ArticleRequest $request)
    {
        return $this->articleService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return $articleService
     */
    public function show(Article $article)
    {
        return $this->articleService->show($article->id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ArticleRequest $request
     * @param  Article $article
     * @return $articleService
     */
    public function update(ArticleRequest $request, Article $article)
    {
        return $this->articleService->update($request, $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Article $article
     */
    public function destroy(Article $article)
    {
        return $this->articleService->destroy($article->id);
    }
}
