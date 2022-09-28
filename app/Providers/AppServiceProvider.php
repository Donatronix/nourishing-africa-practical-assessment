<?php

namespace App\Providers;

use App\Services\Company\CompanyService;
use App\Services\Contracts\CompanyContract;
use App\Services\Contracts\CountryContract;
use App\Services\Contracts\UserContract;
use App\Services\Country\CountryService;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected array $services = [
        CompanyContract::class => CompanyService::class,
        UserContract::class => UserService::class,
        CountryContract::class => CountryService::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->services as $interface => $service) {
            $this->app->bind($interface, $service);
        }
    }
}
