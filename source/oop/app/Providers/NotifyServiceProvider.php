<?php
namespace App\Providers;

use App\Services\EmailOnly;
use App\Services\LaravelMailer;
use App\Services\Sms;
use App\Services\SmsAddOn;
use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Services\MailAdapter', function ($app) {
            return new LaravelMailer();
        });
        $this->app->singleton('App\Services\SmsAdapter', function ($app) {
            return new Sms();
        });
        // $this->app->singleton('App\Services\Notify', function ($app) {
        //     return new ('\App\Services\MailAndSms');
        // });
        $this->app->singleton('App\Services\Notify', function ($app) {
            return new SmsAddOn(new EmailOnly());
        });
    }
}