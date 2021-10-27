<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Services\ArticleServiceInterface;

class ArticleController extends Controller
{
    public function __construct(private ArticleServiceInterface $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return ArticleResource
     */
    public function index()
    {
        return ArticleResource::collection($this->articleService->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ArticleResource
     */
    public function store(Request $request)
    {
        return new ArticleResource($this->articleService->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return ArticleResource
     */
    public function show(Article $article)
    {
        $article = $this->articleService->show($article->id);
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Article $article
     * @return ArticleResource
     */
    public function update(Request $request, Article $article)
    {
        $article = $this->articleService->update($request, $article->id);
        return new ArticleResource($article);
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
