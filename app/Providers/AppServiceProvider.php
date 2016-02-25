<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use App\Repositories\Contracts\ConfigRepository;
use App\Repositories\Contracts\MenuRepository;
use App\Repositories\Contracts\ServiceRepository;
use App\Repositories\Contracts\PostRepository;
use App\Repositories\Contracts\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Contracts\UserRepository::class,
            \App\Repositories\UserRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\CategoryRepository::class,
            \App\Repositories\CategoryRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\PostRepository::class,
            \App\Repositories\PostRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\PageRepository::class,
            \App\Repositories\PageRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\SlideRepository::class,
            \App\Repositories\SlideRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ConfigRepository::class,
            \App\Repositories\ConfigRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\MenuRepository::class,
            \App\Repositories\MenuRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\PartnerRepository::class,
            \App\Repositories\PartnerRepositoryEloquent::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ServiceRepository::class,
            \App\Repositories\ServiceRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Services\Contracts\UploadService::class,
            \App\Services\UploadServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\UserService::class,
            \App\Services\UserServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\CategoryService::class,
            \App\Services\CategoryServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\PostService::class,
            \App\Services\PostServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\PageService::class,
            \App\Services\PageServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\SlideService::class,
            \App\Services\SlideServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\ConfigService::class,
            \App\Services\ConfigServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\MenuService::class,
            \App\Services\MenuServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\PartnerService::class,
            \App\Services\PartnerServiceJob::class
        );
        $this->app->bind(
            \App\Services\Contracts\ServiceService::class,
            \App\Services\ServiceServiceJob::class
        );

        $this->composers();
    }

    public function composers()
    {
        view()->composer('backend.*', function ($view) {
            $view->with('me', \Auth::user());
        });

        view()->composer('frontend.*', function ($view) {
            $view->with('configs', Cache::remember('configs', 60, function () {
                return app(ConfigRepository::class)->all()->first();
            }));
            $view->with('menuHead', Cache::remember('menuHead', 60, function () {
                return app(MenuRepository::class)->root('head');
            }));
            $view->with('menuFooter', Cache::remember('menuFooter', 60, function () {
                return app(MenuRepository::class)->root('footer')->take(2);
            }));
        });

        view()->composer('frontend.post.*', function ($view) {
            $view->with('postRandom', Cache::remember('postRandom', 60, function () {
                return app(PostRepository::class)->postRandom(5);
            }));
            $view->with('categoryPost', Cache::remember('categoryPost', 60, function () {
                return app(CategoryRepository::class)->take(10);
            }));
        });
    }
}
