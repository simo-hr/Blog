<?php

declare(strict_types=1);

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function index();
    public function store(int $category_id,string $title, string $content);
    public function show(int $id);
    public function update(int $category_id,string $title, string $content, int $id);
    public function destroy(int $id);
}
