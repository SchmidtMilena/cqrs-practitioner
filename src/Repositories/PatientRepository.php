<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Patient;
use App\Models\NewPatientData;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class PatientRepository implements PatientRepositoryInterface
{

    public function getById(int $id): Patient
    {
        // TODO: Implement getById() method.
    }

    public function create(NewPatientData $patientData): void
    {
        // TODO: Implement create() method.
    }
}
