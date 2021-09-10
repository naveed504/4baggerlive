<?php

namespace App\Providers;

use App\Authorizenet\PaymentGateway;
use App\Services\TeamService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // dd('here');
        $this->app->bind(PaymentGateway::class, function ($app) {
            return new PaymentGateway();
        });


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('route', function ($expression) {
            return "<?php echo route($expression); ?>";
        });
    }
}
