<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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
    public function boot()
    {
        $categories = Category::query()->get();
        view()->share('categories', $categories);

        $collections = Collection::query()->get();
        view()->share('collections', $collections);

        $items = Item::query()->get();
        view()->share(compact('items'));

        $users = User::query()->get();
        view()->share(compact('users'));

        Model::unguard();

        Model::shouldBeStrict(
            $this->app->environment('production')
        );
        

    }
}
