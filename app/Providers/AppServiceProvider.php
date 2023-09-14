<?php

namespace App\Providers;

use App\Models\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        //mostro le categorie in tutte le viste. lo spero perche mi stanno facendo impazzire.
        if (Schema::hasTable('categories')){
            View::share('categories', Category::orderBy('title')->get());
        }
    }
}
