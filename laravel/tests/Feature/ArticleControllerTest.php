<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->article = Article::factory()->create();
        $this->articleContent = ['data' => 'json'];
        $this->category = Category::factory()->create();
    }

    /**
     *  a test store article
     *
     * @return void
     */
    public function testStoreArticle()
    {
        $title = Str::random(10);
        $content = $this->articleContent;
        $response = $this->actingAs($this->user)
            ->post(route('articles.store'), [
                'category_id' => $this->category->id,
                'title' => $title,
                'content' => $content,
            ]);
        $response->assertStatus(201);
        $this->assertDatabaseHas('articles', [
            'category_id' => $this->category->id,
            'title' => $title,
            // 'content' => json_encode($content),
        ]);
    }

    /**
     *  a test show article
     *
     * @return void
     */
    public function testShowArticle()
    {
        $response = $this->actingAs($this->user)->get(route("articles.show", $this->article->id));
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'category_id' => $this->article->category_id,
            'title' => $this->article->title,
            'content' => $this->article->content,
        ]);
    }

    /**
     *  a test update article
     *
     * @return void
     */
    public function testUpdateArticle()
    {
        $title = Str::random(10);
        $content = $this->articleContent;
        $response = $this->actingAs($this->user)
            ->put(route('articles.update', $this->article->id), [
                'category_id' => $this->category->id,
                'title' => $title,
                'content' => $content,
            ]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('articles', [
            'category_id' => $this->category->id,
            'title' => $title,
        ]);
    }

    /**
     *  a test delete article
     *
     * @return void
     */
    public function testDeleteArticle()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('articles.destroy', $this->article->id));
        $response->assertStatus(200);
    }
}
