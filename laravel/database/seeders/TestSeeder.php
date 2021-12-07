<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Web全般', 'parent_id' => null],
                ['name' => 'プログラミング', 'parent_id' => null],
                ['name' => 'インフラ', 'parent_id' => null],
                ['name' => '雑記', 'parent_id' => null],
                ['name' => 'Laravel', 'parent_id' => 2],
                ['name' => 'Nuxt.js', 'parent_id' => 2],
                ['name' => 'PHP', 'parent_id' => 2],
            ]
        );
        DB::table('articles')->insert([
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 6,
                'title' => 'Nuxtで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 7,
                'title' => '【PHP】比較演算子「==」の罠',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 6,
                'title' => 'Nuxtで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 7,
                'title' => '【PHP】比較演算子「==」の罠',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 6,
                'title' => 'Nuxtで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 7,
                'title' => '【PHP】比較演算子「==」の罠',
                'content' => json_encode(["time" => 1637231623270, "blocks" => [["id" => "iYc2n_gUxx", "data" => ["text" => "ヘッダー", "level" => 3], "type" => "header"], ["id" => "Q5whZ_4tYd", "data" => ["text" => "これは普通のテキストです。"], "type" => "paragraph"], ["id" => "bn8KtXcHOe", "data" => ["items" => ["リスト", "リスト"], "style" => "ordered"], "type" => "list"], ["id" => "6ZACvWFRzR", "data" => ["text" => "引用", "caption" => "URL", "alignment" => "left"], "type" => "quote"], ["id" => "eZNCxdH46y", "data" => ["code" => "CODE"], "type" => "code"]], "version" => "2.22.2"]),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
