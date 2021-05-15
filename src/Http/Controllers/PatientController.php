<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PatientData;
use Illuminate\Bus\Dispatcher;
use App\Services\Patient\Commands\AddNewPatient;
use App\Http\Requests\NewPatientRequest;

class PatientController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(NewPatientRequest $request): void
    {
        $data = new PatientData($request->name, $request->lastName, $request->pesel, $request->email);
        $this->dispatcher->dispatch(new AddNewPatient($data));
    }
}
