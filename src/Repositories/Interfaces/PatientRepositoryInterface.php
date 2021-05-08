<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Patient;
use App\Models\NewPatientData;

interface PatientRepositoryInterface
{
    public function getById(int $id): Patient;

    public function create(NewPatientData $patientData): void;
}
