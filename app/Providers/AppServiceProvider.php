<?php

namespace App\Providers;

//use App\Accessors\Cached;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->usePublicPath(config('app.public_path'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        Password::defaults(function () {
            return Password::min(8);
        });

        Blade::directive('role', function ($arguments) {
            return "<?php if (auth()->check() && auth()->user()->hasRole({$arguments})) { ?>";
        });
        Blade::directive('endrole', function () {
            return "<?php } ?>";
        });

        /**
         * Façades
         */
/*
        App::bind('cached', function () {
            return new Cached();
        });
*/
        Cache::rememberForever('multilang', fn() => config('aboleon-framework.translatable.multilang'));
        View::share('current_locale', app()->getLocale());

        //Relation::enforceMorphMap(config('morphables'));
        Paginator::useBootstrapFive();
    }
}
