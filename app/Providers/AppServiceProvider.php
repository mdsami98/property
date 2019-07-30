<?php

namespace App\Providers;

use App\Category;
use App\Profile;
use App\Type;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::select('id','title')->get();

        view()->share('categories', $categories);

        $types = Type::select('id','title')->get();

        view()->share('types', $types);



        $profile = Profile::select('id','image')->get();

        view()->share('profile', $profile);




    }
}
