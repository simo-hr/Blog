<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Services\ArticleImageServiceInterface;

class ArticleImageController extends Controller
{
    public function __construct(private ArticleImageServiceInterface $articleImageService)
    {
    }

    public function upload(Request $request, int $id)
    {
        return new ArticleResource($this->articleImageService->upload($request, $id));
    }
}
