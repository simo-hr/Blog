<?php

declare(strict_types=1);

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function index();
    public function store(string $title, string $content);
    public function show(int $id);
    public function update(string $title, string $content, int $id);
    public function destroy(int $id);
}
