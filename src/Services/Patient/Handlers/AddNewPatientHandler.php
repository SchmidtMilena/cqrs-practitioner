<?php

declare(strict_types=1);

namespace App\Services\Patient\Handlers;

use App\Services\Patient\Commands\AddNewPatient;
use App\Services\Patient\Repositories\PatientRepositoryInterface;

class AddNewPatientHandler
{
    private PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    public function __invoke(AddNewPatient $command): void
    {
        $this->patientRepository->create($command->getPatientData());
    }
}
