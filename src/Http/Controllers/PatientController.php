<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\NewPatientData;
use Illuminate\Bus\Dispatcher;
use App\Commands\AddNewPatient;
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
        $data = new NewPatientData($request->name, $request->lastName, $request->pesel, $request->email);
        $this->dispatcher->dispatch(new AddNewPatient($data));
    }
}
