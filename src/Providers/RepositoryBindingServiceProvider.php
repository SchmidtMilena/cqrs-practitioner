<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PatientRepository;
use App\Repositories\AppointmentRepository;
use App\Repositories\Interfaces\PatientRepositoryInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class RepositoryBindingServiceProvider extends ServiceProvider
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
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
    }
}
