<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

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
    public function boot()
    {
        Paginator::useBootstrapFive();
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        view()->composer('frontend.layout.appLayout', function ($view) {
            $headerMenus = \App\Models\Menu::with(['children' => function ($q) {
                $q->with(['children' => function ($sq) {
                    $sq->with('children')->orderBy('order');
                }])->orderBy('order');
            }])
                ->whereNull('parent_id')
                ->where('position', 'header')
                ->orderBy('order')
                ->get();

            $footerMenus = \App\Models\Menu::with('children')
                ->whereNull('parent_id')
                ->where('position', 'footer')
                ->orderBy('order')
                ->get();

            $view->with('headerMenus', $headerMenus)
                ->with('footerMenus', $footerMenus);
        });
    }
}
