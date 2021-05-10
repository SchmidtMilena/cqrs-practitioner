<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;
use App\Services\Patient\Commands\AddNewPatient;
use App\Services\Patient\Handlers\AddNewPatientHandler;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Commands\CancelAppointment;
use App\Services\Appointment\Handlers\AddNewAppointmentHandler;
use App\Services\Appointment\Handlers\CancelAppointmentHandler;

class BusServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bindCommandsTohandlers();
    }

    private function bindCommandsToHandlers(): void
    {
        Bus::map([
            AddNewAppointment::class => AddNewAppointmentHandler::class,
            AddNewPatient::class => AddNewPatientHandler::class,
            CancelAppointment::class => CancelAppointmentHandler::class
        ]);
    }
}
