<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\ArticleResource;
use App\Repositories\ArticleImageRepositoryInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleImageService implements ArticleImageServiceInterface
{

    public function __construct(private ArticleImageRepositoryInterface $articleImageRepository)
    {
    }

    public function upload(Request $request, int $id)
    {
        $image = $request->file('file');
        if (!$request->hasFile('file') || !$image->isValid()) {
            return response()->json('failed', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/articles/', $imageName);
        return new ArticleResource($this->articleImageRepository->upload($imageName, $id));
    }
}
