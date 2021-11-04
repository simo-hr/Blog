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
                'content' => "これから書く"
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => "これから書く"
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => "これから書く"
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => "これから書く"
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => "これから書く"
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => "これから書く"
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => "これから書く"
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => "これから書く"
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => "これから書く"
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => "これから書く"
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => "これから書く"
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => "これから書く"
            ],
            [
                'category_id' => 1,
                'title' => 'Webの基礎おさらい',
                'content' => "これから書く"
            ],
            [
                'category_id' => 3,
                'title' => 'AWS LightSail使ってみた',
                'content' => "これから書く"
            ],
            [
                'category_id' => 4,
                'title' => '自宅のPC環境を公開',
                'content' => "これから書く"
            ],
            [
                'category_id' => 6,
                'title' => 'Nuxtで○○',
                'content' => "これから書く"
            ],
            [
                'category_id' => 5,
                'title' => 'Laravelで○○',
                'content' => "これから書く"
            ],
            [
                'category_id' => 7,
                'title' => '【PHP】比較演算子「==」の罠',
                'content' => "<div>
            <div>
                <h2>読んでほしい人</h2>
                <p>
                    いきなりですがPHPで'0です' == 0
                    がtrueなのかfalseなのか迷った方ははぜひ見て下さい。
                </p>
                <h2>はじめに</h2>
                <p>
                    PHPで等しいかどうか判別をするときは==か===を使います。
                    ==を使うとPHPは型の判定を行わず、値をなんかいい感じにキャストして比較をしてくれます。
                    例えば、 null == 0や'0' == 0なんかはtrueになります。
                    このあたりは基本的な話なので、みなさん知ってるわ！って感じですよね。すみません。
                    しかし、比較演算子==の仕様にはもう少し罠があり、僕はまんまとハマってしまったので本記事でご紹介していきたいと思います。
                </p>
                <h2>比較演算子 == の罠</h2>
                <p>さっそくですが下記プログラムを実行します。</p>
                <p>
                    このプログラム、どのような結果になると思いますか？
                    少し考えてみて下さい。
                </p>
                <h2>なぜこうなるのか</h2>
                <p>
                    結論から言うと [文字列] ==
                    [整数]で比較をすると文字列は整数にキャストされる。
                    整数で始まらない文字列は全て0にキャストされる
                    整数で始まる文字列は、その整数にキャストされる が理由です。
                </p>
                <p>公式ドキュメントには以下のように記載されています</p>
                <p>
                    オペランドが両方数値形式の文字列の場合、もしくは一方が数値で、もう一方が数値形式の文字列の場合、
                    比較は数値として行われます。
                    これらのルールはswitch文にも適用されます。型の変換は演算子が === や
                    !== の場合は行われません。
                    なぜなら、これらの演算子は、値と型を両方比較するものだからです。
                </p>
                <p>
                    つまり、先程のプログラムだと 'news zero' → 0 'Re:ゼロ' →　0 '１です'
                    →　1 という感じでにPHPが勝手に変換しちゃってるんですね。
                    これって有効的に使える場面あるんだろうか...。
                    ちなみに公式ドキュメントは、このような挙動になることを赤字でしっかり警告していました。
                    それに気づかず、なんで文字列と0が同じなんだと困惑していた僕...。
                    みなさん、困ったときはまず公式ドキュメントをしっかり読みましょう。
                </p>
                <h2>最後に</h2>
                <p>
                    今回の比較演算子の例に限らずPHPは型が曖昧でも動いてしまうので、変数や返り値の型をしっかり意識していきたいですね。
                    ちなみに、本記事で紹介した仕様はPHP8.0から変更されているようです。
                    下の記事が参考になるかと思うので、興味ある方はぜひ。
                </p>
            </div>
        </div>"
            ]
        ]);
    }
}
