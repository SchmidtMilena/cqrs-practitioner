<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Commands\AddNewPatient;
use App\Models\Interfaces\Serializable;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class AddNewPatientHandler
{
    private PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    public function __invoke(AddNewPatient $command): void
    {
        $this->saveToDatabase($command->getPatientData());
    }

    private function saveToDatabase(Serializable $serializable): void
    {
        $this->patientRepository->create($serializable->serialize());
    }
}
