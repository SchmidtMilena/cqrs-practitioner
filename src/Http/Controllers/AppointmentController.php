<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Bus\Dispatcher;
use App\Models\AppointmentData;
use Illuminate\Http\JsonResponse;
use App\Commands\AddNewAppointment;
use App\Commands\CancelAppointment;
use App\Http\Requests\NewAppointmentRequest;
use App\Http\Requests\CancelAppointmentRequest;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class AppointmentController extends Controller
{
    private Dispatcher $dispatcher;
    private PatientRepositoryInterface $patientRepository;

    public function __construct(Dispatcher $dispatcher, PatientRepositoryInterface $patientRepository)
    {
        $this->dispatcher = $dispatcher;
        $this->patientRepository = $patientRepository;
    }

    public function store(NewAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new AddNewAppointment(
            new AppointmentData($request->id, $request->date), $this->patientRepository)
        );
    }

    public function delete(CancelAppointmentRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(new CancelAppointment($request->appointment_id));
    }
}
