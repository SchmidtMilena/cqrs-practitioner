<?php

declare(strict_types=1);

namespace App\Services\Appointment\Commands;

use App\Models\Patient;
use App\Models\AppointmentData;
use App\Services\Patient\Repositories\PatientRepositoryInterface;

class AddNewAppointment
{
    private AppointmentData $appointmentData;
    private PatientRepositoryInterface $patientRepository;

    public function __construct(AppointmentData $appointmentData, PatientRepositoryInterface $patientRepository)
    {
        $this->appointmentData = $appointmentData;
        $this->patientRepository = $patientRepository;
    }

    public function getAppointmentData(): AppointmentData
    {
        return $this->appointmentData;
    }

    public function getPatient(): Patient
    {
        return $this->patientRepository->findById($this->appointmentData->getPatientId());
    }
}
