<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->article = Article::factory()->create();
        $this->parentCategory = Category::factory()->create(['parent_id' => null]);
        $this->childCategory = Category::factory()->create(['parent_id' => $this->parentCategory->id]);
    }

    /**
     *  a test store category
     *
     * @return void
     */
    public function testStoreCategory()
    {
        $name = Str::random(10);
        $response = $this->actingAs($this->user)
            ->post(route('categories.store'), [
                'parent_id' => $this->parentCategory->id,
                'name' => $name,
            ]);
        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', [
            'parent_id' => $this->parentCategory->id,
            'name' => $name,
        ]);
    }

    /**
     *  a test show category
     *
     * @return void
     */
    public function testShowCategory()
    {
        $response = $this->actingAs($this->user)
            ->get(route('categories.show', $this->childCategory->id));
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'parent_id' => $this->parentCategory->id,
            'name' => $this->childCategory->name,
        ]);
    }

    /**
     *  a test update category
     *
     * @return void
     */
    public function testUpdateCategory()
    {
        $name = Str::random(10);
        $response = $this->actingAs($this->user)
            ->put(route('categories.update', $this->childCategory->id), [
                'parent_id' => $this->parentCategory->id,
                'name' => $name
            ]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', [
            'parent_id' => $this->childCategory->parent_id,
            'name' => $name
        ]);
    }

    /**
     *  a test delete category
     *
     * @return void
     */
    public function testDeleteCategory()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('categories.destroy', $this->parentCategory->id));
        $response->assertStatus(200);
        $response = $this->actingAs($this->user)
            ->delete(route('categories.destroy', $this->childCategory->id));
        $response->assertStatus(404);
    }
}
