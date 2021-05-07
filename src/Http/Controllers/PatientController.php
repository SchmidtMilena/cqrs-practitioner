<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewPatientData;
use Illuminate\Bus\Dispatcher;
use App\Commands\AddNewPatient;

class PatientController extends Controller
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function store(): void
    {
        $dummyData = [
            'name' => 'test',
            'lastName' => 'testowy',
            'pesel' => '11111111111',
            'email' => 'test@test.pl'
        ];

        $data = new NewPatientData($dummyData['name'], $dummyData['lastName'], $dummyData['pesel'], $dummyData['email']);
        $this->dispatcher->dispatch(new AddNewPatient($data));
    }
}
