<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(\Src\GestionExample\User\Application\GetUserUseCase::class)
            ->needs(\Src\GestionExample\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\GestionExample\User\Infrastructure\Repositories\Pdo\UserRepository::class);
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
