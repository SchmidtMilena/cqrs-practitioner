<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\NewPatientRequest;
use App\Services\Patient\Commands\AddNewPatient;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PatientController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewPatientRequest $request): JsonResponse
    {
        $this->dispatcher->dispatch(
            new AddNewPatient(
                $request->get('name'),
                $request->get('lastName'),
                $request->get('pesel'),
                $request->get('email')
            )
        );

        return response()->json()->setStatusCode(Response::HTTP_CREATED);
    }
}
