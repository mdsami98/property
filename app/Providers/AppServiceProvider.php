<?php

namespace App\Providers;

use App\Category;
use App\Post;
use App\Profile;
use App\RegionAreaCity;
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

        $regions = RegionAreaCity::select('id', 'region')->get();
        view()->share('regions', $regions);

        $recentposts = Post::select('id', 'title')->orderBy('id', 'DESC')->take(5)->get();
        view()->share('recentposts', $recentposts);


        $notificationPost = Post::where('publication_status', 0)->orderBy('id', 'DESC')->get();
        view()->share('notificationPost', $notificationPost);




    }
}
