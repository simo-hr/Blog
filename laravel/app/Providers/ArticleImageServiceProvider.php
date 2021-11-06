<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\ArticleImageRepository;
use App\Repositories\ArticleImageRepositoryInterface;
use App\Services\ArticleImageService;
use App\Services\ArticleImageServiceInterface;
use Illuminate\Support\ServiceProvider;

class ArticleImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ArticleImageRepositoryInterface::class,
            ArticleImageRepository::class,
        );

        $this->app->bind(
            ArticleImageServiceInterface::class,
            function ($app) {
                return new ArticleImageService(
                    $app->make(ArticleImageRepositoryInterface::class)
                );
            },
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
