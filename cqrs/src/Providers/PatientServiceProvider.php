<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Patient\Repositories\PatientRepository;
use App\Services\Patient\Repositories\PatientRepositoryInterface;

class PatientServiceProvider extends ServiceProvider
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

    public function provides(): array
    {
        return [PatientRepositoryInterface::class];
    }
    /**
     * Bind repository interfaces to their implementations
     *
     * @return void
     */
    private function bindRepositoryInterfacesToImplementations(): void
    {
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
    }
}
