<?php

namespace Batmahir\MongoDbQueueDriver;

use Illuminate\Support\ServiceProvider;

class MongoDbQueueDriverServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MongoDbQueue::class, function ($app) {
            return new MongoDbQueue();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [MongoDbQueue::class];
    }
}