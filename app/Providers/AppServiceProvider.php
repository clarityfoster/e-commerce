<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Gender;
use App\Models\Cart;

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
        View::composer('*', function($view) {
            $view->with('gender', Gender::all());
            $userId = Auth::id();
            if($userId) {
                $totalQuantity = Cart::where('user_id', $userId)->sum('quantity');
                $view->with('totalQuantity', $totalQuantity);
            } else {
                $view->with('totalQuantity', 0);
            }
        });
    }
}
