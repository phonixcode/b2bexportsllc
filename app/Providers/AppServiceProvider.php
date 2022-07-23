<?php

namespace App\Providers;

use App\Models\AboutUS;
use App\Models\Blog;
use App\Models\History;
use App\Models\Settings;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        if(Schema::hasTable('settings')) {
            $settings = Settings::first();
		    View::share('settings', $settings);
        }

        if(Schema::hasTable('histories')) {
            $history = History::first();
		    View::share('history', $history);
        }

        if(Schema::hasTable('blogs')) {
            $blog = Blog::first();
		    View::share('blog', $blog);
        }

        if(Schema::hasTable('about_u_s')) {
            $abt = AboutUS::first();
		    View::share('abt', $abt);
        }
    }
}
