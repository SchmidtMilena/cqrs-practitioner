<?php

declare(strict_types=1);

namespace App\Services\Patient\Commands;

use App\Models\PatientData;

class AddNewPatient
{
    private PatientData $patientData;

    public function __construct(PatientData $patientData)
    {
        $this->patientData = $patientData;
    }

    public function getPatientData(): PatientData
    {
        return $this->patientData;
    }
}
