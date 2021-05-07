<?php

declare(strict_types=1);

namespace App\Providers;

use App\Commands\AddNewPatient;
use Illuminate\Support\Facades\Bus;
use App\Commands\AddNewAppointment;
use App\Commands\CancelAppointment;
use App\Handlers\AddNewPatientHandler;
use Illuminate\Support\ServiceProvider;
use App\Handlers\AddNewAppointmentHandler;
use App\Handlers\CancelAppointmentHandler;

class BusServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Bus::map([
            AddNewAppointment::class => AddNewAppointmentHandler::class,
            AddNewPatient::class => AddNewPatientHandler::class,
            CancelAppointment::class => CancelAppointmentHandler::class
        ]);
    }
}
