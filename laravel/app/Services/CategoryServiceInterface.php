<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;

interface CategoryServiceInterface
{
    public function index(Request $request);
    public function store(Request $request);
    public function show(int $id);
    public function update(Request $request, int $id);
    public function destroy(int $id);
}
