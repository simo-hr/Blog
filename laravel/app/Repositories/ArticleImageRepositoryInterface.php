<?php

declare(strict_types=1);

namespace App\Repositories;

interface ArticleImageRepositoryInterface
{
    public function upload(string $image, int $id);
}
