<?php
declare(strict_types=1);

namespace Infrastructure\Providers;

use Domain\Interfaces\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Persistence\Repositories\UserRepository;

final class DoctrineRepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
