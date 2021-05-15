<?php

declare(strict_types=1);

namespace App\Services\Patient\Repositories;

use App\Models\PatientData;

interface PatientRepositoryInterface
{
    public function findById(int $id): PatientData;

    public function create(PatientData $patientData): PatientData;
}
