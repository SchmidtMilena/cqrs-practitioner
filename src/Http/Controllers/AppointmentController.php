<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\NewAppointmentRequest;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Commands\CancelAppointment;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class AppointmentController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new AddNewAppointment((int)$request->get('patient_id'), $request->get('date')));
        return response()->json()->setStatusCode(Response::HTTP_CREATED);
    }

    public function destroy(int $appointment): JsonResponse
    {
        $this->dispatcher->dispatch(new CancelAppointment($appointment));
        return new JsonResponse();
    }
}
