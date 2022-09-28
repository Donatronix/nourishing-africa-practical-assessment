<?php

namespace App\Providers;

use App\Repositories\CompanyRepositoryEloquent;
use App\Repositories\CountryRepositoryEloquent;
use App\Repositories\Interfaces\CompanyRepository;
use App\Repositories\Interfaces\CountryRepository;
use App\Repositories\Interfaces\UserRepository;
use App\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(CompanyRepository::class, CompanyRepositoryEloquent::class);
        $this->app->bind(CountryRepository::class, CountryRepositoryEloquent::class);
        //:end-bindings:
    }
}
