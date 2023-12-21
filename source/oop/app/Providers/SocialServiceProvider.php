<?php
namespace App\Providers;

use App\Services\FacebookClient;
use App\Services\TwitterAdapter;
use App\Services\TwitterClient;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Services\SocialPosting', function ($app) {
            return new TwitterAdapter(new TwitterClient);
        });
    }
}