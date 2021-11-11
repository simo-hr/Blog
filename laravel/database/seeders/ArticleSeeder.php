<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 6,
                'title' => 'Nuxtで○○',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 7,
                'title' => '【PHP】比較演算子「==」の罠',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
