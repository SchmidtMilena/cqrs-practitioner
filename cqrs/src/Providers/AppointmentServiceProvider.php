<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Appointment\Repositories\AppointmentRepository;
use App\Services\Appointment\Repositories\AppointmentRepositoryInterface;

class AppointmentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bindRepositoryInterfacesToImplementations();
    }

    /**
     * Bind repository interfaces to their implementations
     *
     * @return void
     */
    private function bindRepositoryInterfacesToImplementations(): void
    {
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
    }

    public function provides(): array
    {
        return [AppointmentRepositoryInterface::class];
    }
}
