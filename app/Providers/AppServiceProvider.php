<?php

namespace App\Providers;

use App\Models\CityPage;
use App\Models\LatestMove;
use App\Models\Project;
use App\Models\Route;
use App\Models\Service;
use App\Models\Team;
use App\Models\VideoTestimonial;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
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
        View::composer('components.team', function ($view) {
            $view->with('teams', Team::active()->get());
        });

        View::composer('components.latest-move', function ($view) {
            $view->with('works', LatestMove::where('is_active', true)->get());
        });

        View::composer('components.video-testimonial', function ($view) {
            $view->with('videoTestimonials', VideoTestimonial::where('is_active', true)->get());
        });

        View::composer('components.project-section', function ($view) {
            $view->with('projects', Project::where('is_active', true)->take(6)->get());
        });

        RateLimiter::for('contact-form', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        Paginator::useBootstrap();

    }
}
