<?php

namespace App\Providers;

use App\Interface\StudentRepositoryInterface;
use App\Repository\StudentRepository;
use Illuminate\Support\ServiceProvider;

class SutdentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class,StudentRepository::class );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
