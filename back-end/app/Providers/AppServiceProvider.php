<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Contracts\HttpClientService::class,
            \App\Services\GuzzleHttpClientService::class
        );

        $this->app->bind(
            \App\Contracts\RepositoryService::class,
            \App\Services\GithubService::class
        );
    }
}
