<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Bus\Dispatcher;
use App\Models\AppointmentData;
use Illuminate\Http\JsonResponse;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Commands\CancelAppointment;
use App\Http\Requests\NewAppointmentRequest;
use App\Http\Requests\CancelAppointmentRequest;

class AppointmentController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new AddNewAppointment(new AppointmentData($request->id, $request->date)));
    }

    public function delete(CancelAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new CancelAppointment($request->appointment_id));
    }
}
