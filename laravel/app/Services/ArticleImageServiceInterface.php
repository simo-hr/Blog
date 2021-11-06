<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;

interface ArticleImageServiceInterface
{
    public function upload(Request $request, int $id);
}
