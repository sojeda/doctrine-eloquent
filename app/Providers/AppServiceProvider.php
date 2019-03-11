<?php

namespace App\Providers;

use App\Doctrine\Repositories\DoctrineArticleRepository;
use App\Entities\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(ArticleRepository::class, function($app) {
            // This is what Doctrine's EntityRepository needs in its constructor.
            return new DoctrineArticleRepository(
                $app['em'],
                $app['em']->getClassMetaData(Article::class)
            );
        });
    }
}
