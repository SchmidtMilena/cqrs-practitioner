<?php

declare(strict_types=1);

namespace App\Providers;

use App\Handlers\AddNewPatientHandler;
use Illuminate\Support\ServiceProvider;
use App\Services\AddNewPatientProcessor;
use App\Handlers\AddNewAppointmentHandler;
use App\Handlers\CancelAppointmentHandler;
use App\Services\AddNewAppointmentProcessor;
use App\Services\CancelAppointmentProcessor;
use App\Services\Interfaces\ProcessorInterface;

class CommandProcessorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * Binding Processor interface to implementation needed in Command handlers classes
     * @return void
     */
    public function boot(): void
    {
        $this->app->when(AddNewAppointmentHandler::class)
            ->needs(ProcessorInterface::class)
            ->give(AddNewAppointmentProcessor::class);

        $this->app->when(AddNewPatientHandler::class)
            ->needs(ProcessorInterface::class)
            ->give(AddNewPatientProcessor::class);

        $this->app->when(CancelAppointmentHandler::class)
            ->needs(ProcessorInterface::class)
            ->give(CancelAppointmentProcessor::class);
    }
}
