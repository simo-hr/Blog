<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleService implements ArticleServiceInterface
{

    public function __construct(private ArticleRepositoryInterface $articleRepository)
    {
    }

    public function index()
    {
        return $this->articleRepository->index();
    }

    public function store(Request $request)
    {
        return $this->articleRepository->store($request->title, $request->content);
    }

    public function show(int $id)
    {
        return $this->articleRepository->show($id);
    }

    public function update(Request $request, int $id)
    {
        return $this->articleRepository->update($request->title, $request->content, $id);
    }

    public function destroy(int $id)
    {
        return $this->articleRepository->destroy($id);
    }
}
