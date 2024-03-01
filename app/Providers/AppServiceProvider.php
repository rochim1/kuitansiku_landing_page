<?php

namespace App\Providers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

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
        // bootstap
        Paginator::useBootstrap();

        // lokasi
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        // timezone
        date_default_timezone_set('Asia/Jakarta');

        Gate::define('super_user', function(User $user) {
            return $user->super_user == true;
        });
    }
}
