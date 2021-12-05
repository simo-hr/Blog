<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\ArticleResource;
use App\Repositories\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleService implements ArticleServiceInterface
{

    public function __construct(private ArticleRepositoryInterface $articleRepository)
    {
    }

    public function index()
    {
        return ArticleResource::collection($this->articleRepository->index());
    }

    public function store(Request $request)
    {
        return new ArticleResource($this->articleRepository->store($request->category_id, $request->title, $request->content));
    }

    public function show(int $id)
    {
        return new ArticleResource($this->articleRepository->show($id));
    }

    public function update(Request $request, int $id)
    {
        return new ArticleResource($this->articleRepository->update($request->category_id, $request->title, $request->content, $id));
    }

    public function destroy(int $id)
    {
        return $this->articleRepository->destroy($id);
    }
}
