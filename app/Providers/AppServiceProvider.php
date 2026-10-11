<?php

namespace App\Providers;

use App\Models\ProductCart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
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
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {

        $cart_pro_count = Auth::check()
            ? ProductCart::where('user_id', Auth::id())->count()
            : 0;

        $view->with('cart_pro_count', $cart_pro_count);
    });
    }
}
