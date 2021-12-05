<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticleImageServiceInterface;

class ArticleImageController extends Controller
{
    public function __construct(private ArticleImageServiceInterface $articleImageService)
    {
    }

    /**
     * Upload article image.
     *
     * @param  Request $request
     * @param  int $id
     */
    public function upload(Request $request, int $id)
    {
        return $this->articleImageService->upload($request, $id);
    }
}
