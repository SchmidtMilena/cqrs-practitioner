<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\NewPatientRequest;
use App\Models\PatientData;
use App\Services\Patient\Commands\AddNewPatient;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\JsonResponse;

class PatientController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewPatientRequest $request): JsonResponse
    {
        $data = new PatientData(
            null,
            $request->get('name'),
            $request->get('lastName'),
            $request->get('pesel'),
            $request->get('email')
        );

        $this->dispatcher->dispatch(new AddNewPatient($data));
    }
}
