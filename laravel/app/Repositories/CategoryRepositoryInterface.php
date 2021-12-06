<?php

declare(strict_types=1);

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    public function index(bool $isOnlyParent);
    public function store(?int $parent_id, string $name);
    public function show(int $id);
    public function update(?int $parent_id, string $name, int $id);
    public function destroy(int $id);
}
