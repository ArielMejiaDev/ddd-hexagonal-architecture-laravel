<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(\Src\GestionExample\User\Application\GetUserByCriteriaUseCase::class)
            ->needs(\Src\GestionExample\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\GestionExample\User\Infrastructure\Repositories\Eloquent\UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
