<?php

namespace Batmahir\MongoDbQueueDriver;

use Illuminate\Support\ServiceProvider;

class MongoDbQueueDriverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $manager = $this->app['queue'];

        $manager->addConnector('mongodb-queue', function()
        {
            return new MongoDbConnector($this->app['db']);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MongoDbQueue::class, function ($app) {
            return new MongoDbQueue;
        });
    }


}