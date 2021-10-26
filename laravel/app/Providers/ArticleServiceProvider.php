<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\ArticleRepositoryInterface;
use App\Services\ArticleService;
use App\Services\ArticleServiceInterface;
use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ArticleRepositoryInterface::class,
            ArticleRepository::class,
        );

        $this->app->bind(
            ArticleServiceInterface::class,
            function ($app) {
                return new ArticleService(
                    $app->make(ArticleRepositoryInterface::class)
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
