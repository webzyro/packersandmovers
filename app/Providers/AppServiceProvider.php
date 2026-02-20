<?php

namespace App\Providers;

use App\Models\CityPage;
use App\Models\Route;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.navbar', function ($view) {
            $view->with('services', Service::where('is_active', true)->get(['title', 'slug']));
        });
        View::composer('components.city', function ($view) {
            $view->with('cities', CityPage::where('is_active', true)->get(['title', 'slug']));
        });
        View::composer('components.routes', function ($view) {
            $view->with('routes', Route::where('is_active', true)->get(['title', 'slug']));
        });

        Paginator::useBootstrap();

    }
}
