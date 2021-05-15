<?php

declare(strict_types=1);

namespace App\Services\Patient\Repositories;

use App\Models\Patient;
use App\Models\PatientData;

class PatientRepository implements PatientRepositoryInterface
{
    public function findById(int $id): PatientData
    {
        $patient = Patient::findOrFail($id);
        return $this->mapToPatientData($patient);
    }

    public function create(PatientData $patientData): PatientData
    {
        $patient = new Patient();
        $patient->name = $patientData->getName();
        $patient->lastName = $patientData->getLastName();
        $patient->pesel = $patientData->getPesel();
        $patient->email = $patientData->getEmail();
        $patient->saveOrFail();

        return $this->mapToPatientData($patient);
    }


    private function mapToPatientData(Patient $patient): PatientData
    {
        return new PatientData(
            $patient->id,
            $patient->name,
            $patient->lastName,
            $patient->pesel,
            $patient->email
        );
    }
}
