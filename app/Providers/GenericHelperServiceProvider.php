<?php

namespace App\Providers;

use App\Helpers\GenericHelperClass;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class GenericHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('helpers', function () {
            return new GenericHelperClass();
        });
    }
}
