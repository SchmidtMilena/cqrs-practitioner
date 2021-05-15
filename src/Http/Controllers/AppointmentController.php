<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CancelAppointmentRequest;
use App\Http\Requests\NewAppointmentRequest;
use App\Models\AppointmentData;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Commands\CancelAppointment;
use Carbon\CarbonImmutable;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\JsonResponse;

class AppointmentController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewAppointmentRequest $request): JsonResponse
    {
        $appointmentData = new AppointmentData(
            null,
            $request->get('patient_id'),
            new CarbonImmutable($request->get('date'))
        );

        $this->dispatcher->dispatch(new AddNewAppointment($appointmentData));
    }

    public function destroy(CancelAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new CancelAppointment($request->get('appointment_id')));
    }
}
