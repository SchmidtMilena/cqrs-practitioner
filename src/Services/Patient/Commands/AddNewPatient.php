<?php

declare(strict_types=1);

namespace App\Services\Patient\Commands;

use App\Models\NewPatientData;

class AddNewPatient
{
    private NewPatientData $patientData;

    public function __construct(NewPatientData $patientData)
    {
        $this->patientData = $patientData;
    }

    public function getPatientData(): NewPatientData
    {
        return $this->patientData;
    }
}
