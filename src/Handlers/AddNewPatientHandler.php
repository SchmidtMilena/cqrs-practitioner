<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Commands\AddNewPatient;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class AddNewPatientHandler
{
    private PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {

    }

    public function __invoke(AddNewPatient $command)
    {

    }
}
