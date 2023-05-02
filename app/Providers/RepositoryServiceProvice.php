<?php

namespace App\Providers;

use App\Repository\Blog\BlogRepoInterface;
use App\Repository\Blog\BlogRepository;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Blog\BlogService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvice extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BlogRepoInterface::class,BlogRepository::class);
        $this->app->bind(BlogServiceInterface::class,BlogService::class);
    }
}